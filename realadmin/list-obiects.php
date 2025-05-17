<!DOCTYPE html >
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Admiro - Premium Admin Template</title>
    <!-- Favicon icon-->
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&display=swap" rel="stylesheet">
    <!-- Flag icon css -->
    <link rel="stylesheet" href="../assets/css/vendors/flag-icon.css">
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/iconly-icon.css">
    <link rel="stylesheet" href="../assets/css/bulk-style.css">
    <!-- iconly-icon-->
    <link rel="stylesheet" href="../assets/css/themify.css">
    <!--fontawesome-->
    <link rel="stylesheet" href="../assets/css/fontawesome-min.css">
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/weather-icons/weather-icons.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/simple-datatables/dist/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  </head>
  <body>
    <!-- page-wrapper Start-->
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <div class="page-wrapper compact-wrapper" id="pageWrapper"> 
    <?php
   $url = 'https://realty.pixeldev.ru/realadmin/include/header.php';
   $content = file_get_contents($url);
   if ($content !== false) {
       eval('?>' . $content);
       
   } else {
    
   }
   ?>
      <!-- Page Body Start-->
      <div class="page-body-wrapper"> 
      <?php
   $url = 'https://realty.pixeldev.ru/realadmin/include/sidebar.php';
   $content = file_get_contents($url);
   if ($content !== false) {
       eval('?>' . $content);
       
   } else {
    
   }
   ?>
      <?php
include '../realadmin/security/dbconn.php';

$query = "SELECT * FROM objects ORDER BY id DESC";
$result = $conn->query($query);
?>
<?php


// Получаем уникальные значения для фильтров

// Фильтр по типу объекта (как было)
$types = [];
$res_types = $conn->query("SELECT DISTINCT object_type FROM objects WHERE object_type IS NOT NULL AND object_type != ''");
while ($row = $res_types->fetch_assoc()) $types[] = $row['object_type'];

// Фильтр по publication_status — выводим только уникальные доступные значения
$statuses = [];
$res_statuses = $conn->query("SELECT DISTINCT publication_status FROM objects WHERE publication_status IS NOT NULL AND publication_status != ''");
while ($row = $res_statuses->fetch_assoc()) $statuses[] = $row['publication_status'];

// Фильтр по виду объекта (ak) — теперь строим динамически по факту наличия в базе
$aks = [];
$res_aks = $conn->query("SELECT DISTINCT ak FROM objects WHERE ak IS NOT NULL AND ak != ''");
while ($row = $res_aks->fetch_assoc()) $aks[] = $row['ak'];

// Фильтр по цене (оставляем как есть)
$prices = [];
$res_prices = $conn->query("SELECT DISTINCT min_price FROM objects WHERE min_price IS NOT NULL AND min_price != '' ORDER BY min_price ASC");
while ($row = $res_prices->fetch_assoc()) $prices[] = $row['min_price'];

// Обработка GET-параметров фильтра
$where = [];
$order = "id DESC";

if (!empty($_GET['object_type'])) $where[] = "object_type = '" . $conn->real_escape_string($_GET['object_type']) . "'";
if (!empty($_GET['publication_status'])) $where[] = "publication_status = '" . $conn->real_escape_string($_GET['publication_status']) . "'";
if (!empty($_GET['ak'])) $where[] = "ak = '" . $conn->real_escape_string($_GET['ak']) . "'";
if (!empty($_GET['min_price'])) $where[] = "min_price = '" . $conn->real_escape_string($_GET['min_price']) . "'";

// Сортировка по цене
if (!empty($_GET['sort_price']) && ($_GET['sort_price'] === 'asc' || $_GET['sort_price'] === 'desc')) {
    $order = "min_price " . strtoupper($_GET['sort_price']);
}

$sql = "SELECT * FROM objects";
if ($where) $sql .= " WHERE " . implode(' AND ', $where);
$sql .= " ORDER BY $order";
$result = $conn->query($sql);
?>
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-sm-6 col-12"> 
          <h2>Список объектов</h2>
        </div>
        <div class="col-sm-6 col-12 text-end">
          <a href="add-object.php" class="btn btn-primary">Добавить объект</a>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="list-product-header mb-3">
      <div>
        <div class="light-box">
          <a data-bs-toggle="collapse" href="#collapseProduct" role="button" aria-expanded="false" aria-controls="collapseProduct">
            <i class="filter-icon show" data-feather="filter"></i>
            <i class="icon-close filter-close hide"></i>
          </a>
        </div>
        <a class="btn btn-primary" href="/realadmin/add-object.php"><i class="fa-solid fa-plus"></i>Добавить объект</a>
      </div>
      <div class="collapse" id="collapseProduct">
        <div class="card card-body list-product-body">
          <form method="get">
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3"> 
              <!-- Сортировка по прайсу -->
              <div class="col">
                <select class="form-select" name="sort_price" onchange="this.form.submit()">
                  <option value="">Сортировать по цене</option>
                  <option value="asc" <?= (isset($_GET['sort_price']) && $_GET['sort_price']=='asc')?'selected':'';?>>Сначала дешевые</option>
                  <option value="desc" <?= (isset($_GET['sort_price']) && $_GET['sort_price']=='desc')?'selected':'';?>>Сначала дорогие</option>
                </select>
              </div>
              <!-- Фильтр по publication_status (динамический) -->
              <div class="col"> 
                <select class="form-select" name="publication_status" onchange="this.form.submit()">
                  <option value="">Статус</option>
                  <?php foreach($statuses as $st): ?>
                    <option value="<?= htmlspecialchars($st) ?>" <?= (isset($_GET['publication_status']) && $_GET['publication_status']==$st)?'selected':'';?>>
                      <?= htmlspecialchars($st) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <!-- Фильтр по типу объекта -->
              <div class="col"> 
                <select class="form-select" name="object_type" onchange="this.form.submit()">
                  <option value="">Тип объекта</option>
                  <?php foreach($types as $type): ?>
                    <option value="<?= htmlspecialchars($type) ?>" <?= (isset($_GET['object_type']) && $_GET['object_type']==$type)?'selected':'';?>>
                      <?= htmlspecialchars($type) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <!-- Фильтр по виду объекта (ak, динамически) -->
              <div class="col"> 
                <select class="form-select" name="ak" onchange="this.form.submit()">
                  <option value="">Вид объекта</option>
                  <?php foreach($aks as $ak): ?>
                    <option value="<?= htmlspecialchars($ak) ?>" <?= (isset($_GET['ak']) && $_GET['ak']==$ak)?'selected':'';?>>
                      <?= htmlspecialchars($ak) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <!-- Фильтр по цене (min_price) по конкретному значению -->
              <div class="col">
                <select class="form-select" name="min_price" onchange="this.form.submit()">
                  <option value="">Цена</option>
                  <?php foreach($prices as $price): ?>
                    <option value="<?= htmlspecialchars($price) ?>" <?= (isset($_GET['min_price']) && $_GET['min_price']==$price)?'selected':'';?>>
                      <?= htmlspecialchars($price) ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped align-middle">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Заголовок</th>
                    <th>Тип</th>
                    <th>Статус</th>
                    <th>Дата публикации</th>
                    <th>Мин. цена</th>
                    <th>Макс. цена</th>
                    <th>Куратор</th>
                    <th>Адрес</th>
                    <th style="width:120px;">Действия</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if ($result && $result->num_rows > 0): ?>
                    <?php while($row = $result->fetch_assoc()): ?>
                      <tr>
                        <td><?= htmlspecialchars($row['id']) ?></td>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['object_type']) ?></td>
                        <td><?= htmlspecialchars($row['publication_status']) ?></td>
                        <td><?= htmlspecialchars($row['publication_date']) ?></td>
                        <td><?= htmlspecialchars($row['min_price']) ?></td>
                        <td><?= htmlspecialchars($row['prices']) ?></td>
                        <td><?= htmlspecialchars($row['curator']) ?></td>
                        <td><?= htmlspecialchars($row['address']) ?></td>
                        <td>
                          <a href="edit-object.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-primary" title="Редактировать"><i class="fa fa-edit"></i></a>
                          <a href="delete-object.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-outline-danger" title="Удалить" onclick="return confirm('Удалить объект?')"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                    <?php endwhile; ?>
                  <?php else: ?>
                    <tr>
                      <td colspan="10" class="text-center">Объекты не найдены</td>
                    </tr>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
            <!-- Можно добавить пагинацию здесь -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
        <?php
   $url = 'https://realty.pixeldev.ru/realadmin/include/footer.php';
   $content = file_get_contents($url);
   if ($content !== false) {
       eval('?>' . $content);
       
   } else {
    
   }
   ?>
      </div>
    </div>
    <!-- jquery-->
    <script src="../assets/js/vendors/jquery/jquery.min.js"></script>
    <!-- bootstrap js-->
    <script src="../assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js" defer=""></script>
    <script src="../assets/js/vendors/bootstrap/dist/js/popper.min.js" defer=""></script>
    <!--fontawesome-->
    <script src="../assets/js/vendors/font-awesome/fontawesome-min.js"></script>
    <!-- feather-->
    <script src="../assets/js/vendors/feather-icon/feather.min.js"></script>
    <script src="../assets/js/vendors/feather-icon/custom-script.js"></script>
    <!-- sidebar -->
    <script src="../assets/js/sidebar.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- datatables-->
    <script src="../assets/js/js-datatables/simple-datatables@latest.js"></script>
    <!-- custom_list_product-->
    <script src="../assets/js/custom-list-product.js"></script>

    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
  </body>

</html>