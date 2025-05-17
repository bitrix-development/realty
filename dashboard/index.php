<?php
require '../realadmin/security/dbconn.php';
require '../realadmin/security/user.php';
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
    <title>1База объектов - Просто к росту</title>
    <!-- Favicon icon-->
    <link rel="icon" href="../assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
        <!-- Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com"/>
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:opsz,wght@6..12,200;6..12,300;6..12,400;6..12,500;6..12,600;6..12,700;6..12,800;6..12,900;6..12,1000&amp;display=swap" rel="stylesheet"/>
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
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="/assets/css/color-1.css" media="screen">
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
   require '../share/header.php';
   ?>
      <!-- Page Body Start-->
      <div class="page-body-wrapper"> 
      <?php
   require '../share/sidebar.php';
   ?>
   

        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6 col-12"> 
                  <h2>Дашборд</h2>
                  <p class="mb-0 text-title-gray">С возвращением!</p>
                </div>
                <?php
   require '../share/breadcrumbs.php';
   ?>             

              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dashboard">
            <div class="row">
              <div class="col-xl-4 proorder-xxl-1 col-sm-6 box-col-6">
                <div class="card welcome-banner">
                  <div class="card-header p-0 card-no-border">
                    <div class="welcome-card"><img class="w-100 img-fluid" src="../assets/images/dashboard-1/welcome-bg.png" alt=""><img class="position-absolute img-1 img-fluid" src="../assets/images/dashboard-1/img-1.png" alt=""><img class="position-absolute img-2 img-fluid" src="../assets/images/dashboard-1/img-2.png" alt=""><img class="position-absolute img-3 img-fluid" src="../assets/images/dashboard-1/img-3.png" alt=""><img class="position-absolute img-4 img-fluid" src="../assets/images/dashboard-1/img-4.png" alt=""><img class="position-absolute img-5 img-fluid" src="../assets/images/dashboard-1/img-5.png" alt=""></div>
                  </div>
                  <div class="card-body">
                    <div class="d-flex align-center">
                      <h1>Привет, <? echo  $first_name;?>  <img src="../assets/images/dashboard-1/hand.png" alt=""></h1>
                    </div>
                    <p> С возвращением!</p>
                    <div class="d-flex align-center justify-content-between">
    <a class="btn btn-pill btn-primary" href="">Что нового?</a>
    <span id="time-container">
        <svg class="stroke-icon">
            <use href="../assets/svg/icon-sprite.svg#watch"></use>
        </svg>
        <span id="current-time" style="padding: 0!important; border: 0px!important;"></span>
    </span>
</div>

<script>
    function updateTime() {
        const now = new Date();
        const options = { hour: '2-digit', minute: '2-digit', hour12: true };
        const timeString = now.toLocaleTimeString('en-US', options);
        
        // Обновляем содержимое span с ID current-time
        document.getElementById('current-time').textContent = timeString;
    }

    // Обновляем время сразу при загрузке страницы и каждую минуту
    updateTime();
    setInterval(updateTime, 60000);
</script>

                  </div>
                </div>
              </div>
              
       
             
              <div class="col-lg-12">
                  <div class="header-faq">
                    <h3 class="f-w-700 mb-0">Последние объекты</h3>
                  </div>
                  <div class="row">
                    <div class="col-xxl-3 col-md-6 box-col-6">
                      <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/1.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><i class="fa-solid fa-link"></i></li>
                              <li> <i class="fa-solid fa-download"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="f-w-700">Web Design</h5>
                          <p>Web Design Trends: Provide an overview of current web design trends, such as minimalist design, microinteractions, dark mode, and immersive experiences.</p>
                        </div>
                        <div class="card-footer"><span class="f-w-600">May 15, 2024</span><span class="pull-right"><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i></span></div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6">
                      <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/2.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li> <i class="fa-solid fa-link"></i></li>
                              <li> <i class="fa-solid fa-download"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="f-w-700">Web Development</h5>
                          <p>Web development is a vast field, and there are many other aspects and technologies involved. It's important to continuously learn and keep up with the latest trends and technologies to stay. </p>
                        </div>
                        <div class="card-footer"><span class="f-w-600">May 12, 2024</span><span class="pull-right"><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i></span></div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6">
                      <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/3.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li> <i class="fa-solid fa-link"></i></li>
                              <li><i class="fa-solid fa-download"> </i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="f-w-700">UI Design</h5>
                          <p>UI design is an iterative process that involves research, ideation, prototyping, testing, and refinement. It requires a blend of creativity, user empathy, and understanding of design.</p>
                        </div>
                        <div class="card-footer"><span class="f-w-600">May 13, 2024</span><span class="pull-right"><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary">   </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i></span></div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6">
                      <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/4.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><i class="fa-solid fa-link"></i></li>
                              <li> <i class="fa-solid fa-download"> </i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="f-w-700">UX Design</h5>
                          <p>UX design is a holistic approach that focuses on understanding and meeting user needs, ultimately aiming to create products that are valuable, usable, and delightful for the users.</p>
                        </div>
                        <div class="card-footer"><span class="f-w-600">May 14, 2024</span><span class="pull-right"><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i></span></div>
                      </div>
                    </div>
                  </div>
                </div>            
              <div class="col-lg-12">
                  <div class="header-faq">
                    <h3 class="f-w-700 mb-0">Последние новости</h3>
                  </div>
                  <div class="row">
                    <div class="col-xxl-3 col-md-6 box-col-6">
                      <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/1.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><i class="fa-solid fa-link"></i></li>
                              <li> <i class="fa-solid fa-download"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="f-w-700">Web Design</h5>
                          <p>Web Design Trends: Provide an overview of current web design trends, such as minimalist design, microinteractions, dark mode, and immersive experiences.</p>
                        </div>
                        <div class="card-footer"><span class="f-w-600">May 15, 2024</span><span class="pull-right"><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i></span></div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6">
                      <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/2.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li> <i class="fa-solid fa-link"></i></li>
                              <li> <i class="fa-solid fa-download"></i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="f-w-700">Web Development</h5>
                          <p>Web development is a vast field, and there are many other aspects and technologies involved. It's important to continuously learn and keep up with the latest trends and technologies to stay. </p>
                        </div>
                        <div class="card-footer"><span class="f-w-600">May 12, 2024</span><span class="pull-right"><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i></span></div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6">
                      <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/3.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li> <i class="fa-solid fa-link"></i></li>
                              <li><i class="fa-solid fa-download"> </i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="f-w-700">UI Design</h5>
                          <p>UI design is an iterative process that involves research, ideation, prototyping, testing, and refinement. It requires a blend of creativity, user empathy, and understanding of design.</p>
                        </div>
                        <div class="card-footer"><span class="f-w-600">May 13, 2024</span><span class="pull-right"><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary">   </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i></span></div>
                      </div>
                    </div>
                    <div class="col-xxl-3 col-md-6 box-col-6">
                      <div class="card features-faq product-box">
                        <div class="faq-image product-img"><img class="img-fluid" src="../assets/images/faq/4.jpg" alt="">
                          <div class="product-hover">
                            <ul>
                              <li><i class="fa-solid fa-link"></i></li>
                              <li> <i class="fa-solid fa-download"> </i></li>
                            </ul>
                          </div>
                        </div>
                        <div class="card-body">
                          <h5 class="f-w-700">UX Design</h5>
                          <p>UX design is a holistic approach that focuses on understanding and meeting user needs, ultimately aiming to create products that are valuable, usable, and delightful for the users.</p>
                        </div>
                        <div class="card-footer"><span class="f-w-600">May 14, 2024</span><span class="pull-right"><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i><i class="fa-solid fa-star font-primary"> </i></span></div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <?php
   require '../share/footer.php';
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
    <!-- height_equal-->
    <script src="../assets/js/height-equal.js"></script>
    <!-- config-->
    <script src="../assets/js/config.js"></script>
    <!-- apex-->
    <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
    <!-- scrollbar-->
    <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
    <!-- slick-->
    <script src="../assets/js/slick/slick.min.js"></script>
    <script src="../assets/js/slick/slick.js"></script>
    <!-- data_table-->
    <script src="../assets/js/js-datatables/datatables/jquery.dataTables.min.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/js-datatables/datatables/datatable.custom.js"></script>
    <!-- page_datatable1-->
    <script src="../assets/js/js-datatables/datatables/datatable.custom1.js"></script>
    <!-- page_datatable-->
    <script src="../assets/js/datatable/datatables/datatable.custom.js"></script>

    <!-- tilt-->
    <script src="../assets/js/animation/tilt/tilt.jquery.js"></script>
    <!-- page_tilt-->
    <script src="../assets/js/animation/tilt/tilt-custom.js"></script>
    <!-- dashboard_1-->
    <script src="../assets/js/dashboard/dashboard_1.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
  </body>

</html>