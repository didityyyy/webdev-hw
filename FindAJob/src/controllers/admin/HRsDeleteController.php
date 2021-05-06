<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

if (isset($_GET['id'])){
    $hr = $_GET['id'];
    $query = "DELETE FROM tm_users WHERE username = '$hr' ";
    $results = mysqli_query($conn, $query); 
}
else{
    echo "Грешка при изтриването на служител!";
}
