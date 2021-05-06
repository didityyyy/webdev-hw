<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$username = $_SESSION['username'];

$queryjobs = "SELECT j.id, j.title as Job , j.payment,c.title as category,ci.title as city,j.description,j.company,
j.approved, co.companyname, COUNT(can.jobid) as count
from tb_jobs j
join tb_category_profession c on c.id = j.category
join tb_city ci on ci.id = j.city
join tb_register_company co on co.companyid = j.company
join tb_candidates can on can.jobid = j.id
where co.username LIKE '%$username%'
group by j.id, j.title , j.payment,c.title,ci.title,j.description,j.company,
j.approved, co.companyname";

$resultsjobs = mysqli_query($conn, $queryjobs);
$resultCandidates = mysqli_query($conn, $queryjobs);

if (isset($_GET["job"])) {
    $job = $_GET["job"];
    $searchJob = "SELECT j.id, j.title as Job , j.payment,c.title as category,ci.title as city,j.description,j.company,
    j.approved, co.companyname, COUNT(can.jobid) as count
    from tb_jobs j
    join tb_category_profession c on c.id = j.category
    join tb_city ci on ci.id = j.city
    join tb_register_company co on co.companyid = j.company
    join tb_candidates can on can.jobid = j.id
    where co.username LIKE '%$username%' AND j.id LIKE '%$job%' 
    group by j.id, j.title , j.payment,c.title,ci.title,j.description,j.company,
    j.approved, co.companyname ";
    $results = mysqli_query($conn, $searchJob);
} else {
    $results = mysqli_query($conn, $queryjobs);
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $queryid = "SELECT c.id_c,c.firstname,c.lastname,c.email,c.address,c.city,c.zipcode,c.phone,c.birthdate,c.workexperience,
    c.educationexperience,c.personalexperience,p.username,s.id,j.title as Job,s.title as Status from tb_candidates c
    join tm_status s on s.id = c.status
    join tb_register_client p on p.id = c.profileid
    join tb_jobs j on j.id = c.jobid WHERE j.id = '$id' "; 
    $resultsid = mysqli_query($conn, $queryid);
    $rowid = mysqli_fetch_array($resultsid);
    $resultsC = mysqli_query($conn, $queryid);
}


// candidates
$queryCandidates = "SELECT c.id_c,c.firstname,c.lastname,c.email,c.address,c.city,c.zipcode,c.phone,c.birthdate,c.workexperience,
          c.educationexperience,c.personalexperience,p.username,s.id,j.title from tb_candidates c
          join tm_status s on s.id = c.status
          join tb_register_client p on p.id = c.profileid
          join tb_jobs j on j.id = c.jobid";

$resultsCandidates = mysqli_query($conn, $queryCandidates);


