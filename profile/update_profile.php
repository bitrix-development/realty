<?php
session_start();
require '../realadmin/security/dbconn.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из POST-запроса
    $user_id = $_SESSION['user_id'];
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
    
    if ($update_stmt->execute()) {
        echo json_encode(['status' => 'success', 'message' => 'Данные успешно обновлены.']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Ошибка при обновлении данных.']);
    }
    $update_stmt->close();
    $conn->close();
}
?>