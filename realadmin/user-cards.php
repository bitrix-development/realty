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
                  <h2>Список пользователей</h2>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/realadmin/"><i class="iconly-Home icli svg-color"></i></a></li>   
                    <li class="breadcrumb-item active">Список пользователей</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                  <div class="card-body">
                    <div class="social-img-wrap"> 
                      <div class="social-img"><img src="../assets/images/other-images/profile.png" alt="profile"></div>
                      <div class="edit-icon">
                        <svg>
                          <use href="../assets/svg/icon-sprite.svg#profile-check"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="social-details">
                      <h5 class="mb-1"><a href="social-app.html">Brooklyn Simmons</a></h5><span class="f-light">@brookly.simmons</span>
                      <ul class="card-social">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                  <div class="card-body">
                    <div class="social-img-wrap"> 
                      <div class="social-img"><img class="img-fluid" src="../assets/images/avtar/3.jpg" alt="profile"></div>
                      <div class="edit-icon">
                        <svg>
                          <use href="../assets/svg/icon-sprite.svg#profile-check"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="social-details">
                      <h5 class="mb-1"><a href="social-app.html">Mark Jecno</a></h5><span class="f-light">@mark.jeco</span>
                      <ul class="card-social">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                  <div class="card-body">
                    <div class="social-img-wrap"> 
                      <div class="social-img"><img class="img-fluid" src="../assets/images/avtar/11.jpg" alt="profile"></div>
                      <div class="edit-icon">
                        <svg>
                          <use href="../assets/svg/icon-sprite.svg#profile-check"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="social-details">
                      <h5 class="mb-1"><a href="social-app.html">Dev John</a></h5><span class="f-light">@john.dev</span>
                      <ul class="card-social">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                      </ul>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                  <div class="card-body">
                    <div class="social-img-wrap"> 
                      <div class="social-img"><img class="img-fluid" src="../assets/images/avtar/16.jpg" alt="profile"></div>
                      <div class="edit-icon">
                        <svg>
                          <use href="../assets/svg/icon-sprite.svg#profile-check"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="social-details">
                      <h5 class="mb-1"><a href="social-app.html">Johan Deo</a></h5><span class="f-light">@deo.johan</span>
                      <ul class="card-social">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                  <div class="card-body">
                    <div class="social-img-wrap"> 
                      <div class="social-img"><img class="img-fluid" src="../assets/images/user/7.jpg" alt="profile"></div>
                      <div class="edit-icon">
                        <svg>
                          <use href="../assets/svg/icon-sprite.svg#profile-check"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="social-details">
                      <h5 class="mb-1"><a href="social-app.html">Douglas Reichel</a></h5><span class="f-light">@reichel.douglas</span>
                      <ul class="card-social">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                      </ul>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                  <div class="card-body">
                    <div class="social-img-wrap"> 
                      <div class="social-img"><img class="img-fluid" src="../assets/images/avtar/4.jpg" alt="profile"></div>
                      <div class="edit-icon">
                        <svg>
                          <use href="../assets/svg/icon-sprite.svg#profile-check"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="social-details">
                      <h5 class="mb-1"><a href="social-app.html">Lisa lillian</a></h5><span class="f-light">@lisa.lillian</span>
                      <ul class="card-social">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                      </ul>
                      
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                  <div class="card-body">
                    <div class="social-img-wrap"> 
                      <div class="social-img"><img class="img-fluid" src="../assets/images/user/1.jpg" alt="profile"></div>
                      <div class="edit-icon">
                        <svg>
                          <use href="../assets/svg/icon-sprite.svg#profile-check"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="social-details">
                      <h5 class="mb-1"><a href="social-app.html">Olivia rose</a></h5><span class="f-light">@rose.olivia</span>
                      <ul class="card-social">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                      </ul>
                     
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6 col-xxl-3 col-ed-4 box-col-4">
                <div class="card social-profile">
                  <div class="card-body">
                    <div class="social-img-wrap"> 
                      <div class="social-img"><img class="img-fluid" src="../assets/images/user/2.png" alt="profile"></div>
                      <div class="edit-icon">
                        <svg>
                          <use href="../assets/svg/icon-sprite.svg#profile-check"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="social-details">
                      <h5 class="mb-1"><a href="social-app.html">Sarah Karen</a></h5><span class="f-light">@karen.sarah</span>
                      <ul class="card-social">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://accounts.google.com/" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="https://rss.app/" target="_blank"><i class="fa-solid fa-rss"></i></a></li>
                      </ul>
                     
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
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
  </body>  
</html>