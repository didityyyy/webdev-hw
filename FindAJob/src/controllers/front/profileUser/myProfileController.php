<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$username = $_SESSION['username'];
$query = "SELECT * FROM tb_register_client WHERE username = '$username' ";
$results = mysqli_query($conn, $query);
$row = mysqli_fetch_array($results);


$queryCandidates = "SELECT client.username, client.id , status.title as status, job.title as job, candidates.id_c, tbcom.companyname FROM tb_candidates candidates
join tm_status status on status.id = candidates.status
join tb_register_client client on client.id = candidates.profileid
join tb_jobs job on job.id = candidates.jobid
join tb_register_company tbcom on tbcom.companyid = job.company
WHERE client.username LIKE '%$username%'";

$resultsCandidates = mysqli_query($conn, $queryCandidates);
$resultsCandidatesStatus = mysqli_query($conn, $queryCandidates);

// Change password

if (isset($_POST['changepassword-btn-client'])) {

    $username = $_SESSION['username'];
    $oldpasswordClient = md5($_POST['oldPasswordClient']);
    $newpasswordClient = $_POST['newPasswordClient'];
    $newrepeatedpasswordClient = $_POST['repeatNewPasswordClient'];

    if (empty($oldpasswordClient)) {
        $errors['oldPasswordClient'] = "Моля въведете старата си парола";
    }

    if (empty($newpasswordClient)) {
        $errors['newPasswordClient'] = "Моля въведете новата си парола";
    }

    if (empty($newrepeatedpasswordClient)) {
        $errors['repeatNewPasswordClient'] = "Моля повторете новата си парола";
    }

    if ($newpasswordClient !== $newrepeatedpasswordClient) {
        $errors['repeatNewPasswordClient'] = "Двете пароли не съвпадат.";
    }

    if (strlen($newpasswordClient) < 5) {
        $errors['newPasswordClient'] = "Дължината на паролата трябва да е повече от 5 символа";
    }

    if (count($errors) === 0) {
        $newpassword = md5($newpasswordClient);

        $queryUpdate = "UPDATE tm_users SET password = '$newpassword' WHERE username = '$username' "; 
        $resultsUpdate = mysqli_query($conn, $queryUpdate);
        $message = "Успешно си сменихте паролата!";
    }
}

//Delete profile
if (isset($_POST['deleteaccount-btn-client'])) {
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
    echo("<script>location.href = '/FindAJob/index.php?logout=1';</script>");
}


