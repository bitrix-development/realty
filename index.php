<?php
ob_start(); // Начинаем буферизацию вывода
session_start(); // Начинаем сессию

// Включаем отображение ошибок
/*error_reporting(E_ALL);
ini_set('display_errors', 1);
*/
// Подключение к базе данных
$servername = "localhost"; // Замените на ваш сервер
$username = "digitalplus_bd"; // Замените на ваше имя пользователя
$password = "qwerty123"; // Замените на ваш пароль
$dbname = "digitalplus_bd"; // Замените на имя вашей базы данных

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Проверка, была ли отправлена форма
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login = $_POST['login']; // Получаем логин
    $password = $_POST['password']; // Получаем пароль

    // Подготовка и выполнение SQL-запроса
    $stmt = $conn->prepare("SELECT * FROM users WHERE login = ? AND password = ?");
    $stmt->bind_param("ss", $login, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Проверка, найден ли пользователь
    if ($result->num_rows > 0) {
        // Пользователь найден, сохраняем данные в сессии
        $user = $result->fetch_assoc();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_login'] = $user['login'];
        $_SESSION['user_status'] = $user['profile_status'];

        // Перенаправление на админскую панель
        header("Location: /dashboard/index.php");
        exit();
    } else {
        // Неверный логин или пароль
        $error = "Неверный логин или пароль.";
        echo $error; // Выводим ошибку для отладки
    }
}

$conn->close();
ob_end_flush(); // Завершаем буферизацию вывода
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
    <title>Авторизация</title>
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
    <!-- App css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">
  </head>

  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i class="iconly-Arrow-Up icli"></i></div>
    <!-- tap on tap ends-->
    <!-- loader-->
    <div class="loader-wrapper">
      <div class="loader"><span></span><span></span><span></span><span></span><span></span></div>
    </div>
    <!-- login page start-->
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-12 p-0">    
          <div class="login-card login-dark">
            <div>
              <div><a class="logo" href="index.html"><img class="img-fluid for-light m-auto" src="../assets/images/logo/logo2.png" alt="looginpage"><img class="img-fluid for-dark" src="../assets/images/logo/logo2.png" alt="logo"></a></div>
              <div class="login-main"> 
              <form class="theme-form" method="POST" action="">
        <h2 class="text-center">Войти в админку</h2>
        <p class="text-center">Нужно вставить свой логин и пароль</p>
        <div class="form-group">
            <label class="col-form-label">Логин</label>
            <input class="form-control" type="text" name="login" required placeholder="Логин">
        </div>
        <div class="form-group">
            <label class="col-form-label">Пароль</label>
            <div class="form-input position-relative">
                <input class="form-control" type="password" name="password" required placeholder="*********">
                <div class="show-hide"><span class="show"></span></div>
            </div>
        </div>
        <div class="form-group mb-0 checkbox-checked">
            <div class="form-check checkbox-solid-info">
                <input class="form-check-input" id="solid6" type="checkbox">
                <label class="form-check-label" for="solid6">Запомнить пароль</label>
            </div>
            <div class="text-end mt-3">
                <button class="btn btn-primary btn-block w-100" type="submit">Войти</button>
            </div>
        </div>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger text-center"><?php echo $error; ?></div>
        <?php endif; ?>
    </form>
              </div>
            </div>
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
      <!-- password_show-->
      <script src="../assets/js/password.js"></script>
      <!-- custom script -->
      <script src="../assets/js/script.js"></script>
    </div>
  </body>
</html>