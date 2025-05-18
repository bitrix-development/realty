﻿<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include '../realadmin/security/dbconn.php'; // Подключение к БД

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Обработка даты
    $publication_date = $_POST['publication_date'] ?? '';
    if ($publication_date && strlen($publication_date) == 16) {
        $publication_date .= ':00'; // добавляем секунды
    }

    $name = $_POST['productTitle1'] ?? '';
    $description = $_POST['description'] ?? '';
    $min_price = $_POST['initialCost'] ?? '';
    $max_price = $_POST['sellingPrice'] ?? '';
    $commission = $_POST['commission'] ?? '';
    $developer = $_POST['developer'] ?? '';
    $completion_date = $_POST['completion_date'] ?? '';
    $curator = $_POST['curator'] ?? '';
    $curator_phone = $_POST['curator_phone'] ?? '';
    $address = $_POST['address'] ?? '';
    $coordinates = $_POST['coordinates'] ?? '';
    $location = $_POST['location'] ?? '';
    $object_type = $_POST['object_type'] ?? '';
    $ak = $_POST['ak'] ?? '';
    // !!! Изменено: теперь берем из поля basic-tags !!!
    $tags = $_POST['basic-tags'] ?? '';
    $publication_status = $_POST['publication_status'] ?? '';

    $sql = "INSERT INTO objects 
    (name, description, min_price, prices, commission, developer, completion_date, curator, curator_phone, address, coordinates, location, object_type, ak, tags, publication_status, publication_date)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param(
            "sssssssssssssssss",
            $name, $description, $min_price, $max_price, $commission, $developer, $completion_date,
            $curator, $curator_phone, $address, $coordinates, $location, $object_type, $ak, $tags,
            $publication_status, $publication_date
        );
        if ($stmt->execute()) {
            echo "<div class='alert alert-success'>Объект успешно добавлен!</div>";
        } else {
            echo "<div class='alert alert-danger'>Ошибка выполнения запроса: " . $stmt->error . "</div>";
        }
        $stmt->close();
    } else {
        echo "<div class='alert alert-danger'>Ошибка подготовки запроса: " . $conn->error . "</div>";
    }
}
?>

<!DOCTYPE html >
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Добавить объект</title>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/quill.snow.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/intltelinput.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/tagify.css">
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
          <h2>Добавить объект</h2>
        </div>
        <div class="col-sm-6 col-12">
          <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/realadmin/"><i class="iconly-Home icli svg-color"></i></a></li>   
            <li class="breadcrumb-item active">Добавить объект</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <form method="POST" action="">
    <div class="container-fluid">
      <div class="row"> 
        <div class="col-12"> 
          <div class="card"> 
            <div class="card-header card-no-border pb-0">
              <h3>Заполнение полей</h3>
            </div>
            <div class="card-body">
              <div class="row g-xl-5 g-3">
                <div class="col-xxl-3 col-xl-4 box-col-4e sidebar-left-wrapper">
                  <ul class="sidebar-left-icons nav nav-pills" id="add-product-pills-tab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" id="detail-product-tab" data-bs-toggle="pill" href="#detail-product" role="tab" aria-controls="detail-product" aria-selected="false">
                        <div class="nav-rounded">
                          <div class="product-icons">
                            <svg class="stroke-icon">
                              <use href="../assets/svg/icon-sprite.svg#product-detail"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="product-tab-content">
                          <h5>Основная информация</h5>
                          <p>заголовок и описание объекта</p>
                        </div></a></li>
                    <li class="nav-item"> <a class="nav-link" id="gallery-product-tab" data-bs-toggle="pill" href="#gallery-product" role="tab" aria-controls="gallery-product" aria-selected="false">
                        <div class="nav-rounded">
                          <div class="product-icons">
                            <svg class="stroke-icon">
                              <use href="../assets/svg/icon-sprite.svg#product-gallery"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="product-tab-content">
                          <h5>Галерея</h5>
                          <p>Превью и фотографии объекта</p>
                        </div></a></li>
                    <li class="nav-item"> <a class="nav-link" id="category-product-tab" data-bs-toggle="pill" href="#category-product" role="tab" aria-controls="category-product" aria-selected="false">
                        <div class="nav-rounded">
                          <div class="product-icons">
                            <svg class="stroke-icon">
                              <use href="../assets/svg/icon-sprite.svg#product-category"></use>
                            </svg>
                          </div>
                        </div>
                        <div class="product-tab-content">
                          <h5>Тип объекта</h5>
                          <p>Выбираем категории</p>
                        </div></a></li>
                    <li class="nav-item"><a class="nav-link" id="pricings-tab" data-bs-toggle="pill" href="#pricings" role="tab" aria-controls="pricings" aria-selected="false">
                        <div class="nav-rounded">
                          <div class="product-icons">
                            <svg class="stroke-icon">
                              <use href="../assets/svg/icon-sprite.svg#pricing"> </use>
                            </svg>
                          </div>
                        </div>
                        <div class="product-tab-content">
                          <h5>Ценовой блок</h5>
                          <p>Заполняем информацию о стоимости</p>
                        </div></a></li>
                    <li class="nav-item"><a class="nav-link" id="advance-product-tab" data-bs-toggle="pill" href="#advance-product" role="tab" aria-controls="advance-product" aria-selected="false">
                        <div class="nav-rounded">
                          <div class="product-icons">
                            <svg class="stroke-icon">
                              <use href="../assets/svg/icon-sprite.svg#advance"> </use>
                            </svg>
                          </div>
                        </div>
                        <div class="product-tab-content">
                          <h5>Дополнительно</h5>
                          <p>Прочие свойства объекта</p>
                        </div></a></li>
                  </ul>
                </div>
                <div class="col-xxl-9 col-xl-8 box-col-8 position-relative">
                  <div class="tab-content" id="add-product-pills-tabContent">
                    <div class="tab-pane fade show active" id="detail-product" role="tabpanel" aria-labelledby="detail-product-tab">
                      <div class="sidebar-body">
                        <div class="row g-2">
                          <label class="form-label col-12 m-0" for="productTitle1">Заголовок объекта <span class="text-danger"> *</span></label>
                          <div class="col-12 custom-input">
                            <input class="form-control" id="productTitle1" name="productTitle1" type="text" required>
                          </div>
                          <div class="col-12"> 
                            <div class="toolbar-box">
                              <div id="toolbar2"></div>
                              <textarea style="height: 400px;" class="form-control" id="description" name="description" placeholder="Описание объекта"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="gallery-product" role="tabpanel" aria-labelledby="gallery-product-tab">
  <div class="sidebar-body">
    <div class="product-upload">
      <p>Загрузить превью фото объекта</p>
      <!-- Dropzone без form! -->
      <div id="mainPhotoDropzone" class="dropzone dropzone-light dz-clickable">
        <div class="dz-message needsclick">
          <svg>
            <use href="../assets/svg/icon-sprite.svg#file-upload"></use>
          </svg>
          <h6>Drag your image here, or <a class="text-primary" href="#!">browser</a></h6>
          <span class="note needsclick">SVG, PNG, JPG or GIF</span>
        </div>
      </div>
      <!-- Скрытое поле, чтобы путь к файлу попал в основную форму -->
      <input type="hidden" name="main_photo" id="main_photo_input" value="<?= isset($object) ? htmlspecialchars($object['main_photo']) : '' ?>">
      <!-- Показываем текущее фото если оно есть -->
      <?php if (!empty($object['main_photo'])): ?>
        <div id="main_photo_preview" style="margin-top:10px;">
          <img src="<?= htmlspecialchars($object['main_photo']) ?>" style="max-width:200px;">
        </div>
      <?php else: ?>
        <div id="main_photo_preview"></div>
      <?php endif; ?>
    </div>
  </div>
</div>

             
                    <div class="tab-pane fade" id="category-product" role="tabpanel" aria-labelledby="category-product-tab">
                      <div class="sidebar-body">
                        <div class="row g-lg-4 g-3">
                          <div class="col-12">
                            <div class="row g-3">
                              <div class="col-sm-6">
                                <div class="row g-2"> 
                                  <div class="col-12">
                                    <label class="form-label m-0" for="validationDefault04">Вид объекта</label>
                                  </div>
                                  <div class="col-12">
                                    <select class="form-select" id="validationDefault04" name="object_type" required>
                                      <option value="">Выберите</option>
                                      <option value="АК">АК</option>
                                      <option value="ЖК">ЖК</option>
                                      <option value="КП">КП</option>                                          
                                    </select>
                                    <p>Выберите подходящую категорию</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="row g-2 product-tag">
                                  <div class="col-12">
                                    <label class="form-label d-block m-0">Добавить тег</label>
                                  </div>
                                  <div class="col-12">
                                    <!-- Используем базовое поле для Tagify -->
                                    <input class="form-control" name="basic-tags" value="">
                                    <p>Можно выбрать несколько тегов</p>
                                  </div>
                                </div>
                              </div>
                              </div>
                          </div>
                          <div class="col-12"> 
                            <div class="row g-3">
                              <div class="col-sm-6">
                                <div class="row">
                                  <div class="col-12">
                                    <label class="form-label" for="publishStatus">Статус публикации</label>
                                    <select class="form-select" id="publishStatus" name="publication_status" required>
                                      <option value="">Выберите</option>
                                      <option value="Опубликован">Опубликован</option>
                                      <option value="Черновик">Черновик</option>
                                      <option value="Снят с публикации">Снят с публикации</option>
                                    </select>
                                    <p>Выберите статус объекта</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-sm-6">
                                <div class="row">
                                  <div class="col-12">
                                    <label class="form-label" for="datetime-local1">Дата публикации</label>
                                    <div class="input-group flatpicker-calender product-date">
                                      <input class="form-control" id="datetime-local1" name="publication_date" type="date">
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pricings" role="tabpanel" aria-labelledby="pricings-tab">
                      <div class="sidebar-body">
                        <div class="price-wrapper">
                          <div class="row g-3 custom-input">
                            <div class="col-sm-6"> 
                              <label class="form-label" for="initialCost">Минимальная цена <span class="text-danger">*</span></label>
                              <input class="form-control" id="initialCost" name="initialCost" type="number">
                            </div>
                            <div class="col-sm-6"> 
                              <label class="form-label" for="sellingPrice">Максимальная цена <span class="text-danger">*</span></label>
                              <input class="form-control" id="sellingPrice" name="sellingPrice" type="number">
                            </div>
                            <div class="col-sm-6"> 
                              <label class="form-label" for="commission">Комиссия агента <span class="text-danger">*</span></label>
                              <input class="form-control" id="commission" name="commission" type="number">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="advance-product" role="tabpanel" aria-labelledby="advance-product-tab">
                      <div class="sidebar-body advance-options">
                        <ul class="nav nav-tabs border-tab mb-0" id="advance-option-tab" role="tablist">
                          <li class="nav-item"><a class="nav-link active" id="manifest-option-tab" data-bs-toggle="tab" href="#manifest-option" role="tab" aria-controls="manifest-option" aria-selected="true">Информация</a></li>
                          <li class="nav-item"><a class="nav-link" id="additional-option-tab" data-bs-toggle="tab" href="#additional-option" role="tab" aria-controls="additional-option" aria-selected="false">Файлы</a></li>
                          <li class="nav-item"><a class="nav-link" id="dropping-option-tab" data-bs-toggle="tab" href="#dropping-option" role="tab" aria-controls="dropping-option" aria-selected="false">Локация</a></li>
                        </ul>
                        <div class="tab-content" id="advance-option-tabContent">
                          <div class="tab-pane fade show active" id="manifest-option" role="tabpanel" aria-labelledby="manifest-option-tab">
                            <div class="meta-body"> 
                              <div class="row g-3"> 
                                <div class="col-12"> 
                                  <div class="row g-3">
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="developer">Застройщик</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="developer" name="developer" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="completion_date">Дата сдачи</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="completion_date" name="completion_date" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="curator">Куратор</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="curator" name="curator" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="curator_phone">Телефон куратора</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="curator_phone" name="curator_phone" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="ak">АК</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="ak" name="ak" type="text">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="additional-option" role="tabpanel" aria-labelledby="additional-option-tab">
                            <div class="meta-body">
                              <div class="row g-3"> 
                                <div class="col-12"> 
                                  <div class="row g-3">
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="files">Файлы</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="files" type="text" >
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="pdf">Скачать pdf</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="pdf" type="text" >
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="video">Видео по объекту</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="video" type="text" >
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="dropping-option" role="tabpanel" aria-labelledby="dropping-option-tab">
                            <div class="meta-body">
                              <div class="row g-3"> 
                                <div class="col-12"> 
                                  <div class="row g-3">
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="address">Адрес</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="address" name="address" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="coordinates">Координаты на карте</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="coordinates" name="coordinates" type="text">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-6">
                                      <div class="row custom-input">
                                        <div class="col-12">
                                          <label class="form-label" for="location">Локация</label>
                                        </div>
                                        <div class="col-12">
                                          <input class="form-control" id="location" name="location" type="text">
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div> <!-- tab-content -->
                      </div>
                    </div> <!-- /advance-product -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Save button fixed below main container, always visible -->
      <div class="container-fluid mt-3">
        <div class="row">
          <div class="col-12 text-end">
            <button type="submit" class="btn btn-primary btn-lg px-5">Сохранить</button>
          </div>
        </div>
      </div>
    </div>
  </form>
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
    <!-- form_validation_custom-->
    <script src="../assets/js/form-validation-custom.js"></script>
    <!-- dropzone-->
    <script src="../assets/js/dropzone/dropzone.js"></script>
    <script src="../assets/js/dropzone/dropzone-script.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- form validation -->
    <script src="../assets/js/form-validation-custom.js"></script>
    <!-- flatpicker-->
    <script src="../assets/js/flat-pickr/flatpickr.js"></script>
    <script src="../assets/js/flat-pickr/custom-flatpickr.js"></script>
    <!-- select2_options-->
    <script src="../assets/js/vendors/@yaireo/tagify/dist/tagify.js"></script>
    <script src="../assets/js/vendors/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
  
    <script src="../assets/js/vendors/@yaireo/tagify/dist/intlTelInput.min.js"></script>
    <!-- page_select4-->
    <script src="../assets/js/add-product/select4-custom.js"> </script>
    <!-- editors
    <script src="../assets/js/editors/quill.js"></script>
    editors2
    <script src="../assets/js/custom-add-product.js"></script> -->
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var input = document.querySelector('input[name="basic-tags"]');
        if (input) {
          new Tagify(input);
        }
      });
      document.addEventListener('DOMContentLoaded', function() {
  // Отключаем автоинициализацию Dropzone
  if (window.Dropzone) Dropzone.autoDiscover = false;
  // Инициализация Dropzone на div
  var previewBlock = document.getElementById('main_photo_preview');
  var dz = new Dropzone("#mainPhotoDropzone", {
    url: "/upload.php", // Ваш обработчик загрузки
    paramName: "file", // имя параметра файла
    maxFiles: 1,
    acceptedFiles: "image/jpeg,image/png,image/gif,image/jpg,image/svg+xml",
    addRemoveLinks: true,
    dictDefaultMessage: "Перетащите фото сюда или кликните для выбора",
    init: function() {
      // Если уже есть картинка, показываем ее как превью
      <?php if (!empty($object['main_photo'])): ?>
      var mockFile = { name: "Фото", size: 12345, type: 'image/jpeg', status: Dropzone.SUCCESS, accepted: true };
      this.emit("addedfile", mockFile);
      this.emit("thumbnail", mockFile, "<?= htmlspecialchars($object['main_photo']) ?>");
      this.emit("complete", mockFile);
      this.files.push(mockFile);
      <?php endif; ?>
      this.on("maxfilesexceeded", function(file) {
        this.removeAllFiles();
        this.addFile(file);
      });
    },
    success: function(file, response) {
      // Ожидаем, что response = {filepath: "/uploads/image.jpg"}
      let data = response;
      if (typeof response === "string") {
        try { data = JSON.parse(response); } catch(e) {}
      }
      if (data.filepath) {
        document.getElementById('main_photo_input').value = data.filepath;
        if (previewBlock) {
          previewBlock.innerHTML = '<img src="' + data.filepath + '" style="max-width:200px;">';
        }
      }
    },
    removedfile: function(file) {
      document.getElementById('main_photo_input').value = '';
      if (previewBlock) previewBlock.innerHTML = '';
      file.previewElement && file.previewElement.parentNode.removeChild(file.previewElement);
    }
  });
});
    </script>
  </body>
</html>