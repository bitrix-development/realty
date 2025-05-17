<?php
session_start();
session_destroy();
header("Location: https://realty.pixeldev.ru/index.php");
exit;
?>