<!DOCTYPE html>
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
                  <h2>FAQ</h2>
                </div>
                <div class="col-sm-6 col-12">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/realadmin/"><i class="iconly-Home icli svg-color"></i></a></li>   
                    <li class="breadcrumb-item active">Вопросы и ответы</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid">
            <div class="faq-wrap">
              <div class="row">
              <div class="col-xl-4 box-col-6">
    <div class="card bg-primary">
        <div class="card-body"> 
            <div class="d-flex faq-widgets">
                <div class="flex-grow-1">
                    <h3>Статьи</h3>
                    <p>В нашей внутренней CRM базе вы найдете полезные статьи о недвижимости, которые помогут вам лучше понять рынок и сделать правильный выбор.</p>
                </div>
                <i data-feather="file-text"> </i>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-sm-6 box-col-6">
    <div class="card bg-primary">
        <div class="card-body">
            <div class="d-flex faq-widgets"> 
                <div class="flex-grow-1">
                    <h3>База знаний</h3>
                    <p>Наша база знаний содержит информацию о различных аспектах недвижимости, включая советы по покупке, продаже и аренде объектов.</p>
                </div>
                <i data-feather="book-open"></i>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-4 col-sm-6 box-col-12">
    <div class="card bg-primary">
        <div class="card-body">
            <div class="d-flex faq-widgets">
                <div class="flex-grow-1">
                    <h3>Поддержка</h3>
                    <p>Наша команда поддержки всегда готова помочь вам с любыми вопросами, связанными с использованием CRM базы и управлением объектами недвижимости.</p>
                </div>
                <i data-feather="aperture"></i>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="header-faq">
        <h3 class="f-w-700 mb-3">Часто задаваемые вопросы</h3>
    </div>
    <div class="row default-according style-1 faq-accordion" id="accordionoc">
        <div class="col-xl-8 xl-60 col-lg-6 col-md-7">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon1" aria-expanded="false" aria-controls="collapseicon1"><i data-feather="help-circle"></i> Как выбрать подходящую недвижимость?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon1" aria-labelledby="collapseicon1" data-bs-parent="#accordionoc">
                    <div class="card-body">При выборе недвижимости важно учитывать местоположение, инфраструктуру, состояние объекта и ваши финансовые возможности.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="false" aria-controls="collapseicon2"><i data-feather="help-circle"></i> Как правильно оформить сделку купли-продажи?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon2" data-bs-parent="#accordionoc">
                    <div class="card-body">Для оформления сделки необходимо подготовить все необходимые документы, провести юридическую проверку и зарегистрировать сделку в Росреестре.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon3" aria-expanded="false" aria-controls="collapseicon3"><i data-feather="help-circle"></i> Какие налоги нужно платить при продаже недвижимости?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon3" data-bs-parent="#accordionoc">
                    <div class="card-body">При продаже недвижимости необходимо уплатить налог на доходы физических лиц (НДФЛ), если вы владели объектом менее 5 лет.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon4" aria-expanded="false" aria-controls="collapseicon4"><i data-feather="help-circle"></i> Как получить ипотеку на покупку недвижимости?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon4" data-bs-parent="#accordionoc">
                    <div class="card-body">Для получения ипотеки необходимо обратиться в банк, предоставить необходимые документы и пройти процедуру оценки кредитоспособности.</div>
                </div>
            </div>
            <div class="faq-title">
                <h3 class="f-w-700 mb-3">Покупка и продажа</h3>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon5" aria-expanded="false"><i data-feather="help-circle"></i> Как оценить стоимость недвижимости?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon5" aria-labelledby="collapseicon5" data-bs-parent="#accordionoc">
                    <div class="card-body">Оценка стоимости недвижимости может быть проведена с помощью профессионального оценщика или на основе анализа рынка и цен аналогичных объектов.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon6" aria-expanded="false" aria-controls="collapseicon6"><i data-feather="help-circle"></i> Как избежать мошенничества при покупке недвижимости?</button>
                        </h5>
                </div>
                <div class="collapse" id="collapseicon6" aria-labelledby="collapseicon6" data-bs-parent="#accordionoc">
                    <div class="card-body">Чтобы избежать мошенничества, всегда проверяйте документы продавца, проводите юридическую экспертизу и работайте с надежными агентствами недвижимости.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon7" aria-expanded="false"><i data-feather="help-circle"></i> Какие документы нужны для покупки квартиры?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon7" aria-labelledby="collapseicon7" data-bs-parent="#accordionoc">
                    <div class="card-body">Для покупки квартиры вам понадобятся паспорт, свидетельство о праве собственности, выписка из ЕГРН и другие документы, в зависимости от ситуации.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon8" aria-expanded="false"><i data-feather="help-circle"></i> Как правильно подготовить квартиру к продаже?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon8" data-bs-parent="#accordionoc">
                    <div class="card-body">Для успешной продажи квартиры рекомендуется сделать косметический ремонт, убрать лишние вещи и подготовить все необходимые документы.</div>
                </div>
            </div>
            <div class="faq-title">
                <h3 class="f-w-700 mb-3">Аренда недвижимости</h3>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon9" aria-expanded="false"><i data-feather="help-circle"></i> Как правильно снять квартиру?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon9" aria-labelledby="collapseicon9" data-bs-parent="#accordionoc">
                    <div class="card-body">При аренде квартиры важно проверить документы арендодателя, условия договора и состояние квартиры перед подписанием.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon10" aria-expanded="false" aria-controls="collapseicon10"><i data-feather="help-circle"></i> Какие права имеет арендатор?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon10" data-bs-parent="#accordionoc">
                    <div class="card-body">Арендатор имеет право на использование квартиры, защиту своих прав в суде и получение информации о состоянии квартиры.</div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon11" aria-expanded="false" aria-controls="collapseicon11"><i data-feather="help-circle"></i> Как расторгнуть договор аренды?</button>
                    </h5>
                </div>
                <div class="collapse" id="collapseicon11" data-bs-parent="#accordionoc">
                    <div class="card-body">Договор аренды можно расторгнуть по соглашению сторон или в одностороннем порядке при наличии оснований, указанных в договоре.</div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 xl-40 col-lg-6 col-md-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-mb-faq xs-mt-search">
                        <div class="card-header faq-header pb-0">
                            <h4 class="f-w-700">Поиск статей</h4><i data-feather="help-circle"></i>
                            </div>
                        <div class="card-body faq-body">
                            <div class="faq-form basic-form">
                                <input class="form-control" type="text" placeholder="Поиск.."><i class="search-icon" data-feather="search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-mb-faq">
                        <div class="card-header faq-header pb-0">
                            <h4 class="f-w-700">Навигация</h4><i data-feather="settings"></i>
                        </div>
                        <div class="card-body faq-body">
                            <div class="navigation-btn"><a class="btn btn-primary" href="#"><i class="m-r-10" data-feather="message-square"></i>Задать вопрос</a></div>
                            <div class="navigation-option">
                                <ul>
                                    <li><a href="#"><i data-feather="edit"></i>Учебные материалы</a></li>
                                    <li><a href="#"><i data-feather="globe"></i>Центр помощи</a></li>
                                    <li><a href="#"><i data-feather="book-open"></i>База знаний</a></li>
                                    <li><a href="#"><i data-feather="file-text"></i>Статьи</a><span class="badge badge-primary rounded-pill pull-right">42</span></li>
                                    <li><a href="#"><i data-feather="youtube"></i>Видеоуроки</a><span class="badge badge-primary rounded-pill pull-right">648</span></li>
                                    <li><a href="#"><i data-feather="message-circle"></i>Спросите наше сообщество</a></li>
                                    <li><a href="#"><i data-feather="mail"></i>Связаться с нами</a></li>
                                </ul>
                                <hr>
                                <ul>
                                    <li><a href="#"><i data-feather="message-circle"></i>Спросите наше сообщество</a></li>
                                    <li><a href="#"><i data-feather="mail"></i>Связаться с нами</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header faq-header pb-0">
                            <h4 class="f-w-700 d-inline-block">Последние обновления</h4><span class="pull-right d-inline-block">Смотреть все</span>
                        </div>
                        <div class="card-body faq-body">
                            <div class="d-flex updates-faq-main">
                                <div class="updates-faq"><i class="font-primary" data-feather="rotate-cw"></i></div>
                                <div class="flex-grow-1 updates-bottom-time">
                                    <p class="f-w-600"><a href="#">Давид Линнер</a> запросил возврат денег за двойное списание с карты</p>
                                    <p>10 минут назад</p>
                                </div>
                            </div>
                            <div class="d-flex updates-faq-main">
                                <div class="updates-faq"><i class="font-primary" data-feather="dollar-sign"></i></div>
                                <div class="flex-grow-1 updates-bottom-time">
                                    <p class="f-w-600">Все продавцы получили ежемесячные выплаты</p>
                                    <p>2 часа назад</p>
                                </div>
                            </div>
                            <div class="d-flex updates-faq-main">
                                <div class="updates-faq"><i class="font-primary" data-feather="link"></i></div>
                                <div class="flex-grow-1 updates-bottom-time">
                                    <p class="f-w-600">Пользователь Кристофер <a href="#">Уоллес</a> ожидает ответа от сотрудников</p>
                                    <p>45 минут назад</p>
                                </div>
                            </div>
                            <div class="d-flex updates-faq-main">
                                <div class="updates-faq"><i class="font-primary" data-feather="check"></i></div>
                                <div class="flex-grow-1 updates-bottom-time">
                                    <p class="f-w-600">Заявка #43683 была закрыта <a href="#">Викторией Уилсон</a></p>
                                    <p>7 декабря, 11:48</p>
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
    <!-- theme_customizer-->
    <script src="../assets/js/theme-customizer/customizer.js"></script>
    <!-- custom script -->
    <script src="../assets/js/script.js"></script>
  </body>
</html>