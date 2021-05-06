<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$query = "SELECT j.title,j.payment,cat.title as Category,city.title as City,tbcom.companyname,j.description, j.city, j.category, j.id, j.approved, tbcom.logo from tb_jobs j
          join tb_category_profession cat on cat.id = j.category
          join tb_city city on city.id = j.city
          join tb_register_company tbcom on tbcom.companyid = j.company
          WHERE j.approved = 1 ";

$query2 = "SELECT * FROM tb_category_profession ORDER BY title";
$results2 = mysqli_query($conn, $query2);

$query1 = "SELECT * FROM tb_city ORDER BY title";
$results1 = mysqli_query($conn, $query1);

if(isset($_GET["cityjob"])){
    $city = $_GET["cityjob"];
    $searchCity = $query . " AND j.city LIKE '%$city%' ";
    $results = mysqli_query($conn, $searchCity);
}
else if(isset($_GET["categoryjob"])){
    $category = $_GET["categoryjob"];
    $searchCategory = $query . " AND j.category LIKE '%$category%' ";
    $results = mysqli_query($conn, $searchCategory);
}
else if (isset($_GET["searchbox"])){
        $searchbox = $_GET['searchbox'];
        $search = $query . " AND j.title LIKE '%$searchbox%' ";
        $results = mysqli_query($conn, $search);
}
else {
    $results = mysqli_query($conn, $query);
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $querydetails = $query . " AND j.id = '$id' "; 
    $results = mysqli_query($conn, $querydetails);
    $row = mysqli_fetch_array($results);
}




?>

