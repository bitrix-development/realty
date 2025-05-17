<?php
session_start();
session_destroy();
header("Location: https://realty.pixeldev.ru/realadmin/login.php");
exit;
?>