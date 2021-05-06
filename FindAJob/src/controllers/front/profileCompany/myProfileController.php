<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$username = $_SESSION['username'];
$query = "SELECT * FROM tb_register_company WHERE username = '$username' ";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_array($results);


$queryjobs = "SELECT jobs.id, jobs.title as Job , jobs.payment,category.title as category,city.title as city,jobs.description,jobs.company,jobs.approved, company.companyname from tb_jobs jobs
join tb_category_profession category on category.id = jobs.category
join tb_city city on city.id = jobs.city
join tb_register_company company on company.companyid = jobs.company 
where company.username LIKE '%$username%'";

$resultsjobs = mysqli_query($conn, $queryjobs);
$resultsjobsStatus = mysqli_query($conn, $queryjobs);

// Change password

if (isset($_POST['changepassword-btn-company'])) {

    $username = $_SESSION['username'];
    $oldpasswordCompany = md5($_POST['oldPasswordCompany']);
    $newpasswordCompany = $_POST['newPasswordCompany'];
    $newrepeatedpasswordCompany = $_POST['repeatNewPasswordCompany'];

    if (empty($oldpasswordCompany)) {
        $errors['oldPasswordCompany'] = "Моля въведете старата си парола";
    }

    if (empty($newpasswordCompany)) {
        $errors['newPasswordCompany'] = "Моля въведете новата си парола";
    }

    if (empty($newrepeatedpasswordCompany)) {
        $errors['repeatNewPasswordCompany'] = "Моля повторете новата си парола";
    }

    if ($newpasswordCompany !== $newrepeatedpasswordCompany) {
        $errors['repeatNewPasswordCompany'] = "Двете пароли не съвпадат.";
    }

    if (strlen($newpasswordCompany) < 5) {
        $errors['newPasswordCompany'] = "Дължината на паролата трябва да е повече от 5 символа";
    }

    if (count($errors) === 0) {
        $newpassword = md5($newpasswordCompany);

        $queryUpdate = "UPDATE tm_users SET password = '$newpassword' WHERE username = '$username' "; 
        $resultsUpdate = mysqli_query($conn, $queryUpdate);
        $message = "Успешно си сменихте паролата!";
    }
}

//Delete profile
if (isset($_POST['deleteaccount-btn-company'])) {
    $queryDeleteAccount = "DELETE FROM tm_users WHERE username = '$username' ";
    $resultsDeleteAccount = mysqli_query($conn, $queryDeleteAccount);
    // echo("<script>
    // function myFunction() {
    //     var txt;
    //     if (confirm('Do you really want to DELETE this account!')) {
    //       txt = 'Yes!';
    //     } else {
    //       txt = 'No!';
    //     }
    //   }</script>");
    echo("<script>location.href = '/FindAJob/view/front/index.php?logout=1';</script>");
}

//QUERY FOR JOBS DETAILS

$queryJobDetails = "SELECT j.title,j.payment,cat.title as Category,city.title as City,tbcom.companyname,j.description, j.city, j.category, j.id, j.approved from tb_jobs j
          join tb_category_profession cat on cat.id = j.category
          join tb_city city on city.id = j.city
          join tb_register_company tbcom on tbcom.companyid = j.company ";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $querydetails = $queryJobDetails . " WHERE j.id = '$id' "; 
    $results = mysqli_query($conn, $querydetails);
    $row = mysqli_fetch_array($results);
}