<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$query = "SELECT c.id_c,c.firstname,c.lastname,c.email,c.address,c.city,c.zipcode,c.phone,c.birthdate,c.workexperience,
          c.educationexperience,c.personalexperience,p.username,s.id,j.title from tb_candidates c
          join tm_status s on s.id = c.status
          join tb_register_client p on p.id = c.profileid
          join tb_jobs j on j.id = c.jobid";

$queryОnhold            = $query . " WHERE  s.id = 5";
$queryApprovedInterview = $query . " WHERE  s.id = 1";
$queryInterviewed       = $query . " WHERE  s.id = 2";
$queryRejected          = $query . " WHERE  s.id = 3";
$queryApproved          = $query . " WHERE  s.id = 4";

$results1 = mysqli_query($conn, $queryОnhold);
$results2 = mysqli_query($conn, $queryApprovedInterview);
$results3 = mysqli_query($conn, $queryInterviewed);
$results4 = mysqli_query($conn, $queryRejected);
$results5 = mysqli_query($conn, $queryApproved);

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $querydetails = $query . " WHERE c.id_c = '$id' "; 
    $results = mysqli_query($conn, $querydetails);
    $row = mysqli_fetch_array($results);
}

if(isset($_POST['approve-interview'])) {
    $id = $_GET['id'];
    $queryUpdate = "UPDATE tb_candidates SET status = 1 WHERE id_c = '$id' "; 
    $results = mysqli_query($conn, $queryUpdate);
    echo("<script>location.href = '/FindAJob/candidates';</script>");
}

if(isset($_POST['reject'])) {
    $id = $_GET['id'];
    $queryUpdate = "UPDATE tb_candidates SET status = 3 WHERE id_c = '$id' "; 
    $results = mysqli_query($conn, $queryUpdate);
    echo("<script>location.href = '/FindAJob/candidates';</script>");
}

if(isset($_POST['interviewed'])) {
    $id = $_GET['id'];
    $queryUpdate = "UPDATE tb_candidates SET status = 2 WHERE id_c = '$id' "; 
    $results = mysqli_query($conn, $queryUpdate);
    echo("<script>location.href = '/FindAJob/candidates';</script>");
}

if(isset($_POST['approved'])) {
    $id = $_GET['id'];
    $queryUpdate = "UPDATE tb_candidates SET status = 4 WHERE id_c = '$id' "; 
    $results = mysqli_query($conn, $queryUpdate);
    echo("<script>location.href = '/FindAJob/candidates';</script>");
}