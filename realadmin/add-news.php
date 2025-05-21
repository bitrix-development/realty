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
         <!-- Container-fluid starts-->
         <div class="container-fluid">
            <div class="row">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header card-no-border pb-0">
                    <h3>Post Edit</h3>
                  </div>
                  <div class="card-body add-post">
                    <form class="row needs-validation" novalidate="">
                      <div class="col-sm-12">
                        <div class="mb-3">
                          <label class="mb-2" for="validationCustom01">Title:</label>
                          <input class="form-control" id="validationCustom01" type="text" placeholder="Post Title" required="">
                          <div class="valid-feedback">Looks good!</div>
                        </div>
                        <div class="mb-3">
                          <label class="mb-2">Type:</label>
                          <div class="m-checkbox-inline">
                            <label for="edo-ani">
                              <input class="radio_animated" id="edo-ani" type="radio" name="rdo-ani" checked="">Text
                            </label>
                            <label for="edo-ani1">
                              <input class="radio_animated" id="edo-ani1" type="radio" name="rdo-ani">Image
                            </label>
                            <label for="edo-ani2">
                              <input class="radio_animated" id="edo-ani2" type="radio" name="rdo-ani" checked="">Audio
                            </label>
                            <label for="edo-ani3">
                              <input class="radio_animated" id="edo-ani3" type="radio" name="rdo-ani">Video
                            </label>
                          </div>
                        </div>
                        <div class="mb-3" data-test-hook="remove-button">
                          <label class="col-form-label mb-2" for="choices-remove-button">Category:</label>
                          <select class="form-control col-sm-12" id="choices-remove-button" name="choices-remove-button" multiple="">
                            <option value="">Select Your Name</option>
                            <option value="Choice 1">Lifestyle</option>
                            <option value="Choice 2">Travel</option>
                          </select>
                        </div>
                        <div class="email-wrapper">
                          <div class="theme-form">
                            <div class="mb-3">
                              <label class="mb-2">Content:</label>
                              <div class="toolbar-box">
                                <div id="toolbar1">
                                  <button class="ql-bold">Bold </button>
                                  <button class="ql-italic">Italic </button>
                                  <button class="ql-underline">underline</button>
                                  <button class="ql-list" value="ordered">List </button>
                                  <button class="ql-list" value="bullet"> </button>
                                  <button class="ql-link"></button>
                                  <button class="ql-image"></button>
                                </div>
                                <div id="editor1"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
                    <form class="dropzone" id="singleFileUpload" action="/upload.php">
                      <div class="m-0 dz-message needsclick"><i class="icon-cloud-up"></i>
                        <h6 class="mb-0">Drop files here or click to upload.</h6>
                      </div>
                    </form>
                    <div class="btn-showcase text-end blog-btn">
                      <button class="btn btn-primary" type="submit">Post</button>
                      <input class="btn bg-light font-dark" type="reset" value="Discard">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
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