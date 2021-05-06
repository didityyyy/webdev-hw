<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$errors = array();
$message = NULL;

if (isset($_POST['add-hr-btn'])) {
    $username    = $_POST['username'];
    $password    = $_POST['password'];
    $firstname   = $_POST['firstname'];
    $lastname    = $_POST['lastname'];

    if (empty($firstname)) {
        $errors['firstname'] = "Моля въведете Име";
    }

    if (empty($lastname)) {
        $errors['lastname'] = "Моля въведете Фамилия";
    }

    if (empty($username)) {
        $errors['usernameRegisterClient'] = "Моля въведете потребителско име";
    }

    if (empty($password)) {
        $errors['password'] = "Моля въведете парола";
    }


    $usernameQuery = "SELECT * FROM tm_users WHERE username=? LIMIT 1";
    $stmt = $conn->prepare($usernameQuery);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();

    if ($userCount > 0) {
        $errors['username'] = "Username already exists";
    }

    if (count($errors) === 0) {
        $password = md5($password);
        $role = 1;

        $insert1  = "INSERT INTO tm_users (username,password,role_id) VALUES ('$username', '$password', $role)";
        $query1 = mysqli_query($conn, $insert1) or die(mysqli_error($conn));
        if ($query1 == 1) {
            $insert2 = "INSERT INTO tb_hr (username,firstname,lastname) VALUES ('$username', '$firstname', '$lastname')";
            $query2 = mysqli_query($conn, $insert2) or die(mysqli_error($conn));
            if ($query2 == 1) {
               $message = "Успешно добавихте служител!";
            }
        } 
    }
}
