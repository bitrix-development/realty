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
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Список объектов</h2>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/realadmin/"><i class="iconly-Home icli svg-color"></i></a></li>   
                    <li class="breadcrumb-item active">Список объектов</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row"> 
              <div class="col-sm-12"> 
                <div class="card"> 
                  <div class="card-body">
                    <div class="list-product-header">
                      <div> 
                        <div class="light-box"><a data-bs-toggle="collapse" href="#collapseProduct" role="button" aria-expanded="false" aria-controls="collapseProduct"><i class="filter-icon show" data-feather="filter"></i><i class="icon-close filter-close hide"></i></a></div><a class="btn btn-primary" href="/realadmin/add-object.php"><i class="fa-solid fa-plus"></i>Добавить объект</a>
                      </div>
                      <div class="collapse" id="collapseProduct">
                        <div class="card card-body list-product-body">
                          <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 g-3"> 
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Выбрать объект</option>
                                <option value="1">Apple iphone 13 Pro</option>
                                <option value="2">Wood Chair</option>
                                <option value="3">M185 Compact Wireless Mouse</option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Регион</option>
                                <option value="1">Furniture</option>
                                <option value="2">Smart Gadgets</option>
                                <option value="3">Electrics</option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Тип объекта</option>
                                <option value="1">Smart Phones</option>
                                <option value="2">Smart Watches</option>
                                <option value="3">Wireless headphone</option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Статус</option>
                                <option value="1">Sold Out </option>
                                <option value="2">In Stock</option>
                                <option value="3">Pre Order</option>
                                <option value="4">Limited Stock </option>
                              </select>
                            </div>
                            <div class="col"> 
                              <select class="form-select" aria-label="Default select example">
                                <option selected="">Цена</option>
                                <option value="1">56000.00</option>
                                <option value="2">19000.00</option>
                                <option value="3">10000.00</option>
                                <option value="3">15000.00</option>
                                <option value="3">99000.00</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="list-product">
                      <table class="table" id="project-status">
                        <thead> 
                          <tr> 
                            <th>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </th>
                            <th> <span class="f-light f-w-600">Название</span></th>
                            <th> <span class="f-light f-w-600">Артикул</span></th>
                            <th> <span class="f-light f-w-600">Регион</span></th>
                            <th> <span class="f-light f-w-600">Цена</span></th>
                            <th> <span class="f-light f-w-600">Порядок</span></th>
                            <th> <span class="f-light f-w-600">Статус</span></th>
                            <th> <span class="f-light f-w-600">Рейтинг</span></th>
                            <th> <span class="f-light f-w-600">Действие</span></th>
                          </tr>
                        </thead>
                        <tbody> 
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/laptop.png" alt="laptop"></div>
                                <p>Apple Desktop 2024</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td> 
                              <p class="f-light">Laptops</p>
                            </td>
                            <td> 
                              <p class="f-light">56000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">13</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/phone.png" alt="phone"></div>
                                <p>Apple iphone 13 Pro</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">56379FG3AW</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Phones    </p>
                            </td>
                            <td> 
                              <p class="f-light">19000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/headphone.png" alt="headphones"></div>
                                <p>Headphones</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">33KR5689B1</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones       </p>
                            </td>
                            <td> 
                              <p class="f-light">10000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">5</p>
                            </td>
                            <td> 
                              <div class="badge badge-light-primary">In Stock</div>
                            </td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/wireless-headphone.png" alt="wireless headphone"></div>
                                <p>wireless-headphone</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">AD6789HEY0</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones         </p>
                            </td>
                            <td> 
                              <p class="f-light">15000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">4</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/1.png" alt="chair"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">456DF78DFQ</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture         </p>
                            </td>
                            <td> 
                              <p class="f-light">99000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">2</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/2.png" alt="chairs"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">5633GD3K54</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture       </p>
                            </td>
                            <td> 
                              <p class="f-light">1000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">8</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/ipad.png" alt="mac laptop"></div>
                                <p>MacBook Air 13.3-inch</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">589KO8PPQ8</p>
                            </td>
                            <td> 
                              <p class="f-light">Laptops         </p>
                            </td>
                            <td> 
                              <p class="f-light">45000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">10</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/mouse.png" alt="mouse"></div>
                                <p>M185 Compact Wireless Mouse</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td> 
                              <p class="f-light">E-Commerce         </p>
                            </td>
                            <td> 
                              <p class="f-light">56000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">13</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i><i class="fa-solid fa-star font-light"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/1.png" alt="chairs"></div>
                                <p>Wood chairs</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">568GH3LLQ2</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture </p>
                            </td>
                            <td> 
                              <p class="f-light">78000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">50</p>
                            </td>
                            <td> 
                              <div class="badge badge-light-primary">In Stock</div>
                            </td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/watch.png" alt="watch"></div>
                                <p>Smart watch</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">58FR7K34F6</p>
                            </td>
                            <td> 
                              <p class="f-light">Electric         </p>
                            </td>
                            <td> 
                              <p class="f-light">25000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/dvd.png" alt="DVD"></div>
                                <p>DVD</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">HG5667DFQ1</p>
                            </td>
                            <td> 
                              <p class="f-light">Electric      </p>
                            </td>
                            <td> 
                              <p class="f-light">5600.00</p>
                            </td>
                            <td> 
                              <p class="f-light">10</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/speaker.png" alt="speakers"></div>
                                <p>Speakers</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td> 
                              <p class="f-light">Electric</p>
                            </td>
                            <td> 
                              <p class="f-light">12200.00</p>
                            </td>
                            <td> 
                              <p class="f-light">50</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/phone.png" alt="phone"></div>
                                <p>Apple iphone 13 Pro</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">56379FG3AW</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Phones    </p>
                            </td>
                            <td> 
                              <p class="f-light">19000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/headphone.png" alt="headphones"></div>
                                <p>Headphones</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">33KR5689B1</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones       </p>
                            </td>
                            <td> 
                              <p class="f-light">10000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">5</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/1.png" alt="chairs"></div>
                                <p>Wood chairs</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">568GH3LLQ2</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture </p>
                            </td>
                            <td> 
                              <p class="f-light">78000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">50</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/watch.png" alt="watch"></div>
                                <p>Smart watch</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">58FR7K34F6</p>
                            </td>
                            <td> 
                              <p class="f-light">Electric         </p>
                            </td>
                            <td> 
                              <p class="f-light">25000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/phone.png" alt="phone"></div>
                                <p>Apple iphone 13 Pro</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">56379FG3AW</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Phones    </p>
                            </td>
                            <td> 
                              <p class="f-light">19000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/headphone.png" alt="headphones"></div>
                                <p>Headphones</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">33KR5689B1</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones       </p>
                            </td>
                            <td> 
                              <p class="f-light">10000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">5</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/wireless-headphone.png" alt="wireless headphone"></div>
                                <p>wireless-headphone</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">AD6789HEY0</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones         </p>
                            </td>
                            <td> 
                              <p class="f-light">15000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">4</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/1.png" alt="chair"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">456DF78DFQ</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture         </p>
                            </td>
                            <td> 
                              <p class="f-light">99000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">2</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/2.png" alt="chairs"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">5633GD3K54</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture       </p>
                            </td>
                            <td> 
                              <p class="f-light">1000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">8</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/laptop.png" alt="laptop"></div>
                                <p>Apple Desktop 2024</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">02145YK796</p>
                            </td>
                            <td> 
                              <p class="f-light">Laptops</p>
                            </td>
                            <td> 
                              <p class="f-light">56000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">13</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/phone.png" alt="phone"></div>
                                <p>Apple iphone 13 Pro</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">56379FG3AW</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Phones    </p>
                            </td>
                            <td> 
                              <p class="f-light">19000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">48</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/headphone.png" alt="headphones"></div>
                                <p>Headphones</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">33KR5689B1</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones       </p>
                            </td>
                            <td> 
                              <p class="f-light">10000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">5</p>
                            </td>
                            <td> <span class="badge badge-light-primary">In Stock</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/wireless-headphone.png" alt="wireless headphone"></div>
                                <p>wireless-headphone</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">AD6789HEY0</p>
                            </td>
                            <td> 
                              <p class="f-light">Smart Headphones         </p>
                            </td>
                            <td> 
                              <p class="f-light">15000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">4</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out </span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                          <tr class="product-removes">
                            <td>
                              <div class="form-check"> 
                                <input class="form-check-input checkbox-primary" type="checkbox">
                              </div>
                            </td>
                            <td> 
                              <div class="product-names">
                                <div class="light-product-box"><img class="img-fluid" src="../assets/images/product/product-categories/1.png" alt="chair"></div>
                                <p>Wood Chair</p>
                              </div>
                            </td>
                            <td> 
                              <p class="f-light">456DF78DFQ</p>
                            </td>
                            <td> 
                              <p class="f-light">Furniture         </p>
                            </td>
                            <td> 
                              <p class="f-light">99000.00</p>
                            </td>
                            <td> 
                              <p class="f-light">2</p>
                            </td>
                            <td> <span class="badge badge-light-secondary">Sold Out</span></td>
                            <td> 
                              <div class="rating"><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-warning"></i><i class="fa-solid fa-star font-light"></i><i class="fa-solid fa-star font-light"></i><i class="fa-solid fa-star font-light"></i></div>
                            </td>
                            <td> 
                              <div class="product-action"><a href="add-products.html"> 
                                  <svg>    
                                    <use href="../assets/svg/icon-sprite.svg#edit-content"></use>
                                  </svg></a>
                                <svg>
                                  <use href="../assets/svg/icon-sprite.svg#trash1"></use>
                                </svg>
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
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