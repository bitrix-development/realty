<?php
// Подключение к БД
include '../realadmin/security/dbconn.php'; // Подключение к БД

// Получение списка категорий (можно из отдельной таблицы, здесь для примера массив)
$categories = [
    'Производство',
    'Технологии',
    'Бизнес',
    'Программирование',
    'Маркетинг',
    'Искусственный интеллект',
    'Сервисы',
    'Образование',
    'Промышленность'
];

// Обработка формы
$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Валидация полей
    $title = trim($_POST['title'] ?? '');
    $category = trim($_POST['category'] ?? '');
    $preview_description = trim($_POST['preview_description'] ?? '');
    $detailed_description = trim($_POST['detailed_description'] ?? '');
    $publication_date = trim($_POST['publication_date'] ?? '');
    $active_status = $_POST['active_status'] ?? 'не активна';
    $created_by = $_SESSION['user_id'] ?? 1; // <-- подставьте свою систему авторизации
    $creation_date = date('Y-m-d');
    $modification_date = date('Y-m-d');
    $modified_by = $created_by;

    // Изображения
    $preview_photo = null;
    $detailed_photo = null;

    // Загрузка preview_photo
    if (!empty($_FILES['preview_photo']['tmp_name'])) {
        $preview_photo = file_get_contents($_FILES['preview_photo']['tmp_name']);
    }

    // Загрузка detailed_photo
    if (!empty($_FILES['detailed_photo']['tmp_name'])) {
        $detailed_photo = file_get_contents($_FILES['detailed_photo']['tmp_name']);
    }

    // Валидация обязательных полей
    if ($title === '') $errors[] = 'Введите заголовок новости';
    if ($category === '') $errors[] = 'Выберите категорию';
    if ($preview_description === '') $errors[] = 'Добавьте описание анонса';
    if ($detailed_description === '') $errors[] = 'Добавьте детальное описание';
    if ($publication_date === '') $errors[] = 'Укажите дату публикации';

    if (empty($errors)) {
        // Подготовка запроса
        $stmt = $conn->prepare("INSERT INTO news 
            (title, category, preview_description, detailed_description, publication_date, active_status, preview_photo, detailed_photo, creation_date, modification_date, created_by, modified_by) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param(
            "ssssssssssii", 
            $title, 
            $category, 
            $preview_description, 
            $detailed_description, 
            $publication_date, 
            $active_status, 
            $preview_photo, 
            $detailed_photo, 
            $creation_date, 
            $modification_date, 
            $created_by, 
            $modified_by
        );
        if ($stmt->execute()) {
            $success = true;
        } else {
            $errors[] = "Ошибка при добавлении новости: " . $stmt->error;
        }
        $stmt->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Добавление новости</title>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/dropzone.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/choices.js/public/assets/styles/choices.min.css">
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
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12">
                  <h2>Добавить новость</h2>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/realadmin/"><i class="iconly-Home icli svg-color"></i></a></li>   
                    <li class="breadcrumb-item active">Добавить новость</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header card-no-border pb-0">
            
              </div>
              <div class="card-body add-post">
                <?php if ($success): ?>
                  <div class="alert alert-success">Новость успешно добавлена!</div>
                <?php elseif ($errors): ?>
                  <div class="alert alert-danger">
                    <ul>
                      <?php foreach ($errors as $e): ?>
                        <li><?=htmlspecialchars($e)?></li>
                      <?php endforeach; ?>
                    </ul>
                  </div>
                <?php endif; ?>
                <!-- ФОРМА ДОБАВЛЕНИЯ НОВОСТИ -->
                <form class="row needs-validation" method="post" enctype="multipart/form-data" novalidate>
                  <div class="col-sm-12">
                    <div class="mb-3">
                      <label class="mb-2" for="news-title">Заголовок:</label>
                      <input class="form-control" id="news-title" type="text" name="title" value="<?=htmlspecialchars($_POST['title'] ?? '')?>" required>
                    </div>
                    <div class="mb-3">
                      <label class="col-form-label mb-2" for="news-category">Категория:</label>
                      <select class="form-control" id="news-category" name="category" required>
                        <option value="">Выберите категорию</option>
                        <?php foreach ($categories as $cat): ?>
                        <option value="<?=htmlspecialchars($cat)?>" <?= (($_POST['category'] ?? '') === $cat) ? 'selected' : '' ?>><?=htmlspecialchars($cat)?></option>
                        <?php endforeach; ?>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="preview-description">Описание анонса:</label>
                      <textarea class="form-control" id="preview-description" name="preview_description" required><?=htmlspecialchars($_POST['preview_description'] ?? '')?></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="detailed-description">Детальное описание:</label>
                      <textarea class="form-control" id="detailed-description" name="detailed_description" required><?=htmlspecialchars($_POST['detailed_description'] ?? '')?></textarea>
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="pub-date">Дата публикации:</label>
                      <input class="form-control" id="pub-date" type="date" name="publication_date" value="<?=htmlspecialchars($_POST['publication_date'] ?? '')?>" required>
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="active-status">Статус активности:</label>
                      <select class="form-control" id="active-status" name="active_status">
                        <option value="активна" <?= (($_POST['active_status'] ?? 'активна') === 'активна') ? 'selected' : '' ?>>Активна</option>
                        <option value="не активна" <?= (($_POST['active_status'] ?? '') === 'не активна') ? 'selected' : '' ?>>Не активна</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="preview-photo">Изображение анонса:</label>
                      <input class="form-control" type="file" id="preview-photo" name="preview_photo" accept="image/*">
                    </div>
                    <div class="mb-3">
                      <label class="mb-2" for="detailed-photo">Детальное изображение:</label>
                      <input class="form-control" type="file" id="detailed-photo" name="detailed_photo" accept="image/*">
                    </div>
                    <button class="btn btn-primary" type="submit">Добавить новость</button>
                  </div>
                </form>
              </div><!-- card-body -->
            </div> <!-- card -->
          </div> <!-- col -->
        </div> <!-- row -->
      </div> <!-- container-fluid -->
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
    <!-- dropzone-->
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- choice-->
    <script src="../assets/js/vendors/choices.js/public/assets/scripts/choices.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- editors-->
    <script src="../assets/js/editors/quill.js"></script>
    <!-- add_post-->
    <script src="../assets/js/choices/add-post-custom.js"></script>

    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
  </body>

</html>