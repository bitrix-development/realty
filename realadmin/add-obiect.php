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
          <!-- Container-fluid starts-->
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
                              <form class="row g-2">
                                <label class="form-label col-12 m-0" for="productTitle1">Заголовок объекта <span class="text-danger"> *</span></label>
                                <div class="col-12 custom-input">
                                  <input class="form-control is-invalid" id="productTitle1" type="text" required="">
                                  <div class="valid-feedback">Весьма неплохо!</div>
                                  <div class="invalid-feedback">Заголовок должен состоять не менее чем из 3 символов и не повторяться</div>
                                </div>
                                <div class="col-12"> 
                                  <div class="toolbar-box">
                                    <div id="toolbar2"><span class="ql-formats">
                                        <select class="ql-size"></select></span><span class="ql-formats">
                                        <button class="ql-bold">Bold </button>
                                        <button class="ql-italic">Italic </button>
                                        <button class="ql-underline">underline</button>
                                        <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                        <button class="ql-list" value="ordered">List </button>
                                        <button class="ql-list" value="bullet"> </button>
                                        <button class="ql-indent" value="-1"> </button>
                                        <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                        <button class="ql-link"></button>
                                        <button class="ql-image"></button>
                                        <button class="ql-video"></button></span></div>
                                    <div id="editor2"></div>
                                  </div>
                                  <p>Описание объекта</p>
                                </div>
                              </form>
                              <div class="product-buttons">
                                <div class="btn">
                                  <div class="d-flex align-items-center gap-sm-2 gap-1">Далее
                                    <svg>
                                      <use href="../assets/svg/icon-sprite.svg#front-arrow">  </use>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="gallery-product" role="tabpanel" aria-labelledby="gallery-product-tab">
                            <div class="sidebar-body">
                              <div class="product-upload">
                                <p>Product Image </p>
                                <form class="dropzone dropzone-light" id="multiFileUploadA" action="/upload.php">
                                  <div class="dz-message needsclick">
                                    <svg>
                                      <use href="../assets/svg/icon-sprite.svg#file-upload"></use>
                                    </svg>
                                    <h6>Drag your image here, or <a class="text-primary" href="#!">browser</a></h6><span class="note needsclick">SVG,PNG,JPG or GIF</span>
                                  </div>
                                </form>
                              </div>
                              <!--
                              <div class="product-upload">
                                <p>Product Gallery</p>
                                <form class="dropzone dropzone-light" id="multiFileUploadB" action="/upload.php">
                                  <div class="dz-message needsclick">
                                    <svg>
                                      <use href="../assets/svg/icon-sprite.svg#file-upload1"></use>
                                    </svg>
                                    <h6>Drag files here</h6><span class="note needsclick">Add Product Gallery Images</span>
                                  </div>
                                </form>
                              </div>-->
                              <div class="product-buttons">
                                <div class="btn">
                                  <div class="d-flex align-items-center gap-sm-2 gap-1">
                                    <svg>
                                      <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                    </svg>Назад
                                  </div>
                                </div>
                                <div class="btn">
                                  <div class="d-flex align-items-center gap-sm-2 gap-1">Далее
                                    <svg>
                                      <use href="../assets/svg/icon-sprite.svg#front-arrow">     </use>
                                    </svg>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="category-product" role="tabpanel" aria-labelledby="category-product-tab">
                            <div class="sidebar-body">
                              <form>
                                <div class="row g-lg-4 g-3">
                                  <div class="col-12">
                                    <div class="row g-3">
                                      <div class="col-sm-6">
                                        <div class="row g-2"> 
                                          <div class="col-12">
                                            <label class="form-label m-0" for="validationDefault04">Вид объекта</label>
                                          </div>
                                          <div class="col-12">
                                            <select class="form-select" id="validationDefault04" required="">
                                              <option selected="" value="">АК</option>
                                              <option>ЖК</option>
                                              <option>КП</option>                                          
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
                                            <input name="basic-tags" value="для жизни, под аренду, для отдыха">
                                            <p>Можно выбрать несколько тегов</p>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-12">
                                        <div class="category-buton"><a class="btn button-primary" href="#!" data-bs-toggle="modal" data-bs-target="#category-pill-modal"><i class="me-2 fa-solid fa-plus"></i>Добавить новую категорию </a></div>
                                        <div class="modal fade" id="category-pill-modal" tabindex="-1" aria-hidden="true">
                                          <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h3 class="modal-title fs-5">Добавить новую категорию</h3>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                              </div>
                                              <div class="modal-body custom-input"> 
                                                <div class="create-category">
                                                  <div>
                                                    <label class="form-label" for="categoryName">Название категории <span class="text-danger"> *</span></label>
                                                    <input class="form-control m-0" id="categoryName" type="text" required="">
                                                    <div class="toolbar-box">
                                                      <div id="toolbar3"><span class="ql-formats">
                                                          <select class="ql-size"></select></span><span class="ql-formats">
                                                          <button class="ql-bold">Bold </button>
                                                          <button class="ql-italic">Italic </button>
                                                          <button class="ql-underline">underline</button>
                                                          <button class="ql-strike">Strike </button></span><span class="ql-formats">
                                                          <button class="ql-list" value="ordered">List </button>
                                                          <button class="ql-list" value="bullet"> </button>
                                                          <button class="ql-indent" value="-1"> </button>
                                                          <button class="ql-indent" value="+1"></button></span><span class="ql-formats">
                                                          <button class="ql-link"></button>
                                                          <button class="ql-image"></button>
                                                          <button class="ql-video"></button></span></div>
                                                      <div id="editor3"></div>
                                                    </div>
                                                  </div>
                                                  <p>Описание(подсказка) категории</p>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button class="btn btn-light font-dark" type="button" data-bs-dismiss="modal">Отмена</button>
                                                <button class="btn btn-primary" type="button">Добавить</button>
                                              </div>
                                            </div>
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
                                            <select class="form-select" id="publishStatus" required="">
                                              <option selected="" value="">Опубликован</option>
                                              <option>Черновик</option>
                                              <option>Снят с публикации</option>
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
                                              <input class="form-control" id="datetime-local1" type="date">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-buttons">
                                  <div class="btn">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                      <svg>
                                        <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                      </svg>Назад
                                    </div>
                                  </div>
                                  <div class="btn">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Далее
                                      <svg>
                                        <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="pricings" role="tabpanel" aria-labelledby="pricings-tab">
                            <div class="sidebar-body">
                              <form class="price-wrapper">
                                <div class="row g-3 custom-input">
                                  <div class="col-sm-6"> 
                                    <label class="form-label" for="initialCost">Минимальная цена <span class="text-danger">*</span></label>
                                    <input class="form-control" id="initialCost" type="number">
                                  </div>
                                  <div class="col-sm-6"> 
                                    <label class="form-label" for="sellingPrice">Максимальная цена <span class="text-danger">*</span></label>
                                    <input class="form-control" id="sellingPrice" type="number">
                                  </div>
                                  
                                  
                                 
                                </div>
                                <div class="product-buttons">
                                  <div class="btn">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">
                                      <svg>
                                        <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                      </svg>Назад
                                    </div>
                                  </div>
                                  <div class="btn">
                                    <div class="d-flex align-items-center gap-sm-2 gap-1">Далее
                                      <svg>
                                        <use href="../assets/svg/icon-sprite.svg#front-arrow">   </use>
                                      </svg>
                                    </div>
                                  </div>
                                </div>
                              </form>
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
                                    <form id="advance-tab">
                                      <div class="row g-3"> 
                                        <div class="col-12"> 
                                          <div class="row g-3">
                                             <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Застройщик</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                                 
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Дата сдачи</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                               
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Куратор</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                              
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Телефон куратора</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                                 
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-buttons">
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                            </svg>Назад
                                          </div>
                                        </div>
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">Далее
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                            </svg>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="additional-option" role="tabpanel" aria-labelledby="additional-option-tab">
                                  <div class="meta-body">
                                    <form>
                                      <div class="row g-3"> 
                                        <div class="col-12"> 
                                          <div class="row g-3">
                                            <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Файлы</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                               
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Скачать pdf</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                              
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Видео по объекту</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                              
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-buttons">
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                            </svg>Назад
                                          </div>
                                        </div>
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">Далее
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                            </svg>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <div class="tab-pane fade" id="dropping-option" role="tabpanel" aria-labelledby="dropping-option-tab">
                                  <div class="meta-body">
                                    <form>
                                     <div class="row g-3"> 
                                        <div class="col-12"> 
                                          <div class="row g-3">
                                            <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Адрес</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                             
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Координаты на карте</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                   
                                                </div>
                                              </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="row custom-input">
                                                <div class="col-12">
                                                  <label class="form-label" for="tagTitle">Локация</label>
                                                </div>
                                                <div class="col-12">
                                                  <input class="form-control" id="tagTitle" type="text">
                                                
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-buttons">
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#back-arrow"></use>
                                            </svg>Назад
                                          </div>
                                        </div>
                                        <div class="btn">
                                          <div class="d-flex align-items-center gap-sm-2 gap-1">Сохранить
                                            <svg>
                                              <use href="../assets/svg/icon-sprite.svg#front-arrow"></use>
                                            </svg>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
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
    <!-- editors-->
    <script src="../assets/js/editors/quill.js"></script>
    <!-- editors2-->
    <script src="../assets/js/custom-add-product.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
  </body>
</html>