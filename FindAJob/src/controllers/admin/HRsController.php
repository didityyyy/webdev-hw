<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$query = "SELECT * FROM tb_hr";

if (isset($_GET["searchbox"])){
    $searchbox = $_GET['searchbox'];
    $search = $query . " WHERE CONCAT(firstname,lastname,username)  LIKE '%$searchbox%' ";
    $results = mysqli_query($conn, $search);
}

else {
    $results = mysqli_query($conn, $query);
}


