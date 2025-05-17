<?php
require '../realadmin/security/dbconn.php';
require '../realadmin/security/user.php';
?>
<?if ($profile_status === 'активен') {?>
<!DOCTYPE html >
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Admiro admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Admiro admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>Редактирование профиля</title>
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
                  <h2>Редактировать профиль</h2>
                </div>
                <?php
   require '../share/breadcrumbs.php';
   ?>        
              </div>
            </div>
          </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="edit-profile">
              <div class="row">
                <div class="col-xl-4">
                  <div class="card">
                    <div class="card-header card-no-border pb-0">
                      <h3 class="card-title mb-0">Мой профиль</h3>
                      <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                      <a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="row mb-2">
                          <div class="profile-title">
                            <div class="d-flex gap-3">
                            <img class="img-70 rounded-circle" alt="" src="../assets/images/user/7.jpg">
                              <div class="flex-grow-1">
                                <h3 class="mb-1"><? echo  $first_name;?>  <? echo  $last_name;?></h3>
                                <p><? echo  $region;?></p>
                              </div>
                            </div>
                          </div>
                        </div>                      
                        <div class="mb-3">
                          <label class="form-label">Эл почта</label>
                          <input class="form-control" placeholder="your-email@domain.com" value="<? echo  $email;?>">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Пароль</label>
                          <input class="form-control" type="password" value="<? echo  $password;?>">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Телеграм</label>
                          <input class="form-control" placeholder="логин или телефон" value="<? echo  $telegram;?>" >
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Whatsapp</label>
                          <input class="form-control" placeholder="+7 928 000-00-00" value="<? echo  $whatsapp;?>">
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Моб телефон</label>
                          <input class="form-control" placeholder="+7 928 000-00-00" value="<? echo  $phone_number;?>">
                        </div>                    
                        <div class="form-footer">
                          <button class="btn btn-primary btn-block">Сохранить</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <?php

// Проверяем, является ли пользователь администратором
if ($position === 'Администратор' && $profile_status === 'активен') {
    ?>
   <div class="col-xl-8">
        <form class="card" method="POST" >
            <div class="card-header card-no-border pb-0">
                <h3 class="card-title mb-0">Редактировать профиль</h3>
                <div class="card-options">
                    <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
                    <a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label class="form-label">Группа</label>
                            <select class="form-control btn-square" name="position" required>
                                <option value="Администратор" <?= $position === 'Администратор' ? 'selected' : '' ?>>Администратор</option>
                                <option value="Пользователь" <?= $position === 'Пользователь' ? 'selected' : '' ?>>Пользователь</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="mb-3">
                            <label class="form-label">Статус аккаунта</label>
                            <select class="form-control btn-square" name="profile_status" required>
                                <option value="активен" <?= $profile_status === 'активен' ? 'selected' : '' ?>>Активный</option>
                                <option value="не активен" <?= $profile_status === 'не активен' ? 'selected' : '' ?>>Неактивный</option>
                                <option value="черновик" <?= $profile_status === 'черновик' ? 'selected' : '' ?>>Черновик</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="mb-3">
                            <label class="form-label">Логин</label>
                            <input class="form-control" type="text" name="login" value="<?= htmlspecialchars($login) ?>" placeholder="Username" required>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Фамилия</label>
                            <input class="form-control" type="text" name="first_name" value="<?= htmlspecialchars($first_name) ?>" placeholder="Фамилия">
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Имя</label>
                            <input class="form-control" type="text" name="last_name" value="<?= htmlspecialchars($last_name) ?>" placeholder="Имя">
                        </div>


                        </div>
                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                            <label class="form-label">Отчество</label>
                            <input class="form-control" type="text" name="middle_name" value="<?= htmlspecialchars($middle_name) ?>" placeholder="Отчество">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Регион</label>
                            <input class="form-control" type="text" name="region" value="<?= htmlspecialchars($region) ?>" placeholder="Регион">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">Сохранить изменения</button>
            </div>
        </form>
    </div>
    <?php
}
// Обработка отправки формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Чистим входные данные
    $position = $_POST['position'];
    $profile_status = $_POST['profile_status'];
    $login = $_POST['login'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $middle_name = $_POST['middle_name'];
    $region = $_POST['region'];
    // Обновляем данные пользователя в БД
    $update_stmt = $conn->prepare("UPDATE users SET position = ?, profile_status = ?, login = ?, first_name = ?, last_name = ?, middle_name = ?, region = ? WHERE id = ?");
    $update_stmt->bind_param("sssssisi", $position, $profile_status, $login, $first_name, $last_name, $middle_name, $region, $user_id);
    $update_stmt->execute();
    $update_stmt->close();
  


}
?>
                
              </div>
            </div>
          </div>
        </div>
        <?php
           require '../share/footer.php';   
   ?>
      </div>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
$(document).ready(function() {
    // Обработка отправки формы
    $('form').on('submit', function(e) {
        e.preventDefault(); // Отменяем стандартное поведение формы
        // Собираем данные формы
        var formData = $(this).serialize();
        // Отправляем AJAX-запрос
        $.ajax({
            type: 'POST',
            url: '/profile/update_profile.php', // Путь к вашему PHP-скрипту
            data: formData,
            dataType: 'json',
            success: function(response) {
                var $submitButton = $('button[type="submit"]'); // Находим кнопку отправки
                if (response.status === 'success') {
                    // Успешное обновление
                    $submitButton.removeClass('btn-primary').addClass('btn-success').text('Сохранено');
                    setTimeout(function() {
                        $submitButton.removeClass('btn-success').addClass('btn-primary').text('Сохранить изменения');
                    }, 3000); // Возвращаем через 3 секунды
                } else {
                    // Ошибка
                    $submitButton.text('Не удалось сохранить').removeClass('btn-primary').addClass('btn-danger');
                    setTimeout(function() {
                        $submitButton.removeClass('btn-danger').addClass('btn-primary').text('Сохранить изменения');
                    }, 3000); // Возвращаем через 3 секунды
                }
            },
            error: function() {
                alert('Произошла ошибка при отправке данных.');
            }
        });
    });
});
</script>
  </body>
</html>
<?php } else { echo '<script type="text/javascript">
        window.location.href = "/index.php";
      </script>';
exit(); // Завершаем выполнение скрипта
}?>