<?php
session_start(); // Начинаем сессию
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Подключение к базе данных
$servername = "localhost"; // Замените на ваш сервер
$username = "digitalplus_bd"; // Замените на ваше имя пользователя
$password = "qwerty123"; // Замените на ваш пароль
$dbname = "digitalplus_bd"; // Замените на имя вашей базы данных

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Соединение с базой данных успешно установлено.<br>";
}
?>
