<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$query = "SELECT * FROM tb_category_profession ORDER BY title";
$results = mysqli_query($conn, $query);

$query1 = "SELECT * FROM tb_city ORDER BY title";
$results1 = mysqli_query($conn, $query1);

$errors = array();
$message = NULL;

if (isset($_POST['add-job-btn'])) {
    $titlejob        = $_POST['titlejob'];
    $paymentjob      = $_POST['paymentjob'];
    $descriptionjob  = $_POST['descriptionjob'];
    $usernameCompany = $_POST['usernameCompany'];

    if (empty($titlejob)) {
        $errors['titlejob'] = "Моля въведете Заглавие на обява";
    }

    if (empty($paymentjob)) {
        $errors['paymentjob'] = "Моля въведете Заплата";
    }

    if (!isset($_POST['categoryjob']) || $_POST['categoryjob'] === '') {
        $errors['categoryjob'] = "Моля изберете Категория";
    }

    if (!isset($_POST['cityjob']) || $_POST['cityjob'] === '') {
        $errors['cityjob'] = "Моля изберете Град";
    }
 
    if (empty($descriptionjob)) {
        $errors['descriptionjob'] = "Моля въведете описание";
    }

    if (count($errors) === 0) {
        $queryS = "SELECT companyid FROM tb_register_company WHERE username='$usernameCompany'";
        $results = mysqli_query($conn, $queryS);
        if (mysqli_num_rows($results) == 1) {
            while ($row = $results->fetch_assoc()) {
                $companyId = $row["companyid"];
            }
            $insert  = "INSERT INTO tb_jobs (title,payment,category,city,description,company) VALUES ('$titlejob', $paymentjob, " . $_POST['categoryjob'] . ", " . $_POST['cityjob'] . ",'$descriptionjob',$companyId)";
            $query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
            if ($query == 1) {
                $message = "Успешно добавихте вашата обява!";
            }
        }
    }
}
