<?php

session_start();

require_once $_SERVER['DOCUMENT_ROOT'].'/FindAJob/src/database/db.php';

$errors = array();

if (isset($_GET['logout'])) {
    echo "Logout Successfully ";
    session_destroy();
    unset($_SESSION['role_id']);
    unset($_SESSION['username']);
    header('location: /FindAJob/index.php');
    exit();
}

if (isset($_POST['login-btn'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    if ($username == "admin") {
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    } else {
        $password = md5(mysqli_real_escape_string($conn, $_POST['password']));
    }

    if (empty($username)) {
        array_push($errors, "Моля въведете потребителското си име!");
    }
    if (empty($password)) {
        array_push($errors, "Моля въведете парола!");
    }

    if (count($errors) == 0) {
        $query = "SELECT * FROM tm_users WHERE username='$username' AND password='$password'";
        $results = mysqli_query($conn, $query);
        if (mysqli_num_rows($results) == 1) {
            while ($row = $results->fetch_assoc()) {
                $_SESSION['role'] = $row["role_id"];
            }
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Успешно влязохте в акаунта си!";
            header('location: index.php');
        } else {
            array_push($errors, "Неправилно потребителско име и/или неправилна парола!");
        }
    }
}
