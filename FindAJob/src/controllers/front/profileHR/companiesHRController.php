<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$query = "SELECT * FROM tb_register_company";

if(isset($_GET['id'])){
    $companyid = $_GET['id'];
    $querydetails = $query . " WHERE companyid = $companyid "; 
    $resultsdetails = mysqli_query($conn, $querydetails);
    $row = mysqli_fetch_array($resultsdetails);
    $queryjobs = "SELECT * FROM tb_jobs WHERE company = $companyid AND approved = 1";
    $resultsjobs = mysqli_query($conn, $queryjobs);
}

if (isset($_GET["searchbox"])){
    $searchbox = $_GET['searchbox'];
    $search = $query . " WHERE CONCAT(companyname,companyid)  LIKE '%$searchbox%' ";
    $results = mysqli_query($conn, $search);
}
else {
    $results = mysqli_query($conn, $query);
}

