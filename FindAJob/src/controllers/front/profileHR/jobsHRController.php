<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$query = "SELECT j.title,j.payment,cat.title as Category,city.title as City,tbcom.companyname,j.description, j.city, j.category, j.id, j.approved from tb_jobs j
          join tb_category_profession cat on cat.id = j.category
          join tb_city city on city.id = j.city
          join tb_register_company tbcom on tbcom.companyid = j.company";

$queryApproved = $query . " WHERE j.approved = 1 ";
$queryDisapproved = $query . " WHERE j.approved = 0 ";

$results1 = mysqli_query($conn, $queryDisapproved);
$results2 = mysqli_query($conn, $queryApproved);


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $querydetails = $query . " WHERE j.id = '$id' "; 
    $results = mysqli_query($conn, $querydetails);
    $row = mysqli_fetch_array($results);
}

if(isset($_POST['approve'])) {
    $id = $_GET['id'];
    $queryUpdate = " UPDATE tb_jobs SET approved = 1 WHERE id = '$id' "; 
    $results = mysqli_query($conn, $queryUpdate);
    echo("<script>location.href = '/FindAJob/jobs-hr';</script>");
}

if(isset($_POST['disapprove'])) {
    $id = $_GET['id'];
    $queryDelete = "DELETE FROM tb_jobs WHERE id = '$id' "; 
    $results = mysqli_query($conn, $queryDelete);
    echo("<script>location.href = '/FindAJob/jobs-hr';</script>");
}
