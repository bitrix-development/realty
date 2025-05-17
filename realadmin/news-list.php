<!DOCTYPE html>
<html lang="en">
<!-- Copied from https://admin.pixelstrap.net/admiro/template/project-list.html by Cyotek WebCopy 1.7.0.600, 9 мая 2025 г., 9:38:40 -->
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
                  <h2> Список новостей </h2>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/realadmin/"><i class="iconly-Home icli svg-color"></i></a></li>   
                    <li class="breadcrumb-item active">Список новостей</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="row project-cards"> 
              <div class="col-md-12 project-list">
                <div class="card">
                  <div class="row">
                    <div class="col-md-6"> 
                      <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i data-feather="target"></i>Все</a></li>
                        <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i data-feather="info"></i>Не опубликованные</a></li>
                        <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i data-feather="check-circle"></i>Опубликованные</a></li>
                      </ul>
                    </div>
                    <div class="col-md-6 d-md-block d-none">
                      <div class="form-group mb-0 me-0"> </div><a class="btn btn-primary d-flex align-items-center" href="projectcreate.html"> <i data-feather="plus-square"></i>Добавить новость</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-12"> 
                <div class="card">
                  <div class="card-body"> 
                    <div class="tab-content" id="top-tabContent">
                      <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                        <div class="row">
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-danger"><span class="badge badge-danger">Doing</span>
                              <h5 class="f-w-500 mb-2 text-danger">Cutting-Edge Design </h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/4.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Themeforest, australia</p>
                              </div>
                              <p>Responsive Layout: The design is responsive and tablets, and mobile devices</p>
                              <div class="row details"> 
                                <div class="col-6"> <span>Issues </span></div>
                                <div class="col-6 font-danger">12    </div>
                                <div class="col-6"><span>Resolved</span></div>
                                <div class="col-6 font-danger">5</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-danger">7</div>
                              </div>
                              <div class="customers"> 
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+10 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">70% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-danger" style="height: 5px">
                                  <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Customization Options</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>Consistency and Branding: The design maintains consistency , color scheme, and typography. </p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-success">24</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">24</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">40</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/2.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+3 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Mobile-Friendly</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/4.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia </p>
                              </div>
                              <p>Error Handling and Feedback: The design incorporates  and feedback mechanisms.</p>
                              <div class="row details">
                                <div class="col-6"> <span>Issues </span></div>
                                <div class="col-6 font-success">40</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">40</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">20</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/4.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+2 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100%</p><span>Done</span>
                                </div>
                                <div class="progress" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Universal admin Design</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>Customization Options: Depending on It is designed to be responsive options.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-success">24</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">24</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">40</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"> <img class="img-30 rounded-circle" src="../assets/images/user/6.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+3 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-danger"><span class="badge badge-danger">Doing</span>
                              <h5 class="f-w-500 mb-2 text-danger">Modular Structure</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Themeforest, australia</p>
                              </div>
                              <p>Customization Options: Poco admin offers Attention is given to readability  a visually extensive.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-danger">12 </div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-danger">5</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-danger">7</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/6.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+10 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">70% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-danger" style="height: 5px">
                                  <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Dazzling Admin Design </h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>User-friendly Navigation:Dazzling organized categories and subcategories of a sidebar menu.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-success">40</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">40</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">20</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/4.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+2 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                        <div class="row">
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-danger"><span class="badge badge-danger">Doing</span>
                              <h5 class="f-w-500 mb-2 text-danger">Endless admin Design</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/10.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Themeforest, australia</p>
                              </div>
                              <p>The design incorporates clear It focuses on simplicity error handling mechanisms.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-danger">12 </div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-danger">5</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-danger">7</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/6.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+10 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">70% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-danger" style="height: 5px">
                                  <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-danger"><span class="badge badge-danger">Doing</span>
                              <h5 class="f-w-500 mb-2 text-danger">Data Visualization</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>Customization Options: Depending   It strives to create an interface requirements, options.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-danger">24</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-danger">24</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-danger">40</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/6.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/8.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+3 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-danger" style="height: 5px">
                                  <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-danger"><span class="badge badge-danger">Doing</span>
                              <h5 class="f-w-500 mb-2 text-danger">Poco admin Design</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/4.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>  Poco admin design embraces  uses ample white space a clean and minimalistic visual style.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-danger">22</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-danger">88</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-danger">20</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/6.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/7.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+2 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-danger" style="height: 5px">
                                  <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-danger"><span class="badge badge-danger">Doing</span>
                              <h5 class="f-w-500 mb-2 text-danger">Universal admin Design</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/9.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>Attention is given to  visual style and layout across different sections readability to enhance the user experience.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-danger">29</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-danger">88</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-danger">40</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/9.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/10.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+3 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress" style="height: 5px">
                                  <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-danger"><span class="badge badge-danger">Doing</span>
                              <h5 class="f-w-500 mb-2 text-danger">Forms and Inputs</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Themeforest, australia</p>
                              </div>
                              <p>Admin design pays attention to  incorporating these principles form design and input elements. </p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-danger">12 </div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-danger">5</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-danger">7</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/2.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/3.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+10 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">70% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-danger" style="height: 5px">
                                  <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-danger"><span class="badge badge-danger">Doing</span>
                              <h5 class="f-w-500 mb-2 text-danger">Poco admin Design</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/9.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>Poco admin includes a user-friendly  elements like dropdowns system  of a sidebar menu.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-danger">28</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-danger">9</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-danger">26</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/8.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/9.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/10.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+2 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-danger" style="height: 5px">
                                  <div class="progress-bar-animated bg-danger progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                        <div class="row">
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Iconography</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Themeforest, australia</p>
                              </div>
                              <p>The design incorporates clear  highlight important elements  error and feedback mechanisms.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-success">12 </div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">5</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">7</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/10.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+10 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">70% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-success" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Universal admin Design</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/9.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>Attention is given to readability follows a modular approach to enhance the user experience.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-success">66</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">20</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">40</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/9.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/10.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+3 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Poco admin Design</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/8.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>The grid system allows for and utilizes a grid system arrangement of elements.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-success">40</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">93</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">20</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/10.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/9.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/7.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+2 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-success" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Universal admin Design</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/7.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>Admin design recognizes streamlined and uncluttered user importance of accessibility</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues   </span></div>
                                <div class="col-6 font-success">71</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">10</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">40</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/4.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+3 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-success" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Consistency and Modularity</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Themeforest, australia</p>
                              </div>
                              <p> Consistency and Branding: The design appropriate font sizes focusing  and typography.</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-success">12 </div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">5</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">7</div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+10 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">70% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-success" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xxl-4 col-md-6">
                            <div class="project-box font-dark bg-light-success"><span class="badge badge-success">Done</span>
                              <h5 class="f-w-500 mb-2 text-success">Poco admin Design</h5>
                              <div class="d-flex mb-2 align-items-center"><img class="img-20 me-1 rounded-circle" src="../assets/images/user/9.jpg" alt="" data-original-title="" title="">
                                <p class="font-light">Envato, australia</p>
                              </div>
                              <p>Responsive Layout: The design is responsive and tablets, and mobile devices</p>
                              <div class="row details">
                                <div class="col-6"><span>Issues </span></div>
                                <div class="col-6 font-success">40</div>
                                <div class="col-6"> <span>Resolved</span></div>
                                <div class="col-6 font-success">40</div>
                                <div class="col-6"> <span>Comment</span></div>
                                <div class="col-6 font-success">20 </div>
                              </div>
                              <div class="customers">
                                <ul>
                                  <li class="d-inline-block"> <img class="img-30 rounded-circle" src="../assets/images/user/9.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/5.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block"><img class="img-30 rounded-circle" src="../assets/images/user/1.jpg" alt="" data-original-title="" title=""></li>
                                  <li class="d-inline-block ms-2">
                                    <p class="f-12">+2 More</p>
                                  </li>
                                </ul>
                              </div>
                              <div class="project-status mt-4">
                                <div class="d-flex align-items-center gap-1 mb-2">
                                  <p class="mb-0">100% </p><span>Done</span>
                                </div>
                                <div class="progress bg-light-success" style="height: 5px">
                                  <div class="progress-bar-animated bg-success progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
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
          <!-- Container-fluid starts  -->
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
<!-- Copied from https://admin.pixelstrap.net/admiro/template/project-list.html by Cyotek WebCopy 1.7.0.600, 9 мая 2025 г., 9:38:40 -->
</html>