<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$errors = array();
$message = NULL;


if (isset($_POST['candidate-form-btn'])) {
    $firstnameCandidate           = $_POST['firstnameCandidate'];
    $lastnameCandidate            = $_POST['lastnameCandidate'];
    $emailCandidate               = $_POST['emailCandidate'];
    $addressCandidate             = $_POST['addressCandidate'];
    $cityCandidate                = $_POST['cityCandidate'];
    $zipCandidate                 = $_POST['zipCandidate'];
    $phoneCandidate               = $_POST['phoneCandidate'];
    $birthCandidate               = $_POST['birthCandidate'];
    $workexperienceCandidate      = $_POST['workexperienceCandidate'];
    $educationexperienceCandidate = $_POST['educationexperienceCandidate'];
    $personalexperienceCandidate  = $_POST['personalexperienceCandidate'];
    $usernameClient               = $_POST['usernameClient'];

    if (isset($_GET['id'])) {
        $jobid = $_GET['id'];
    }

    if (empty($firstnameCandidate)) {
        $errors['firstnameCandidate'] = "Моля въведете Име";
    }

    if (empty($lastnameCandidate)) {
        $errors['lastnameCandidate'] = "Моля въведете Фамилия";
    }

    if (empty($emailCandidate)) {
        $errors['emailCandidate'] = "Моля въведете Имейл";
    }

    if (empty($addressCandidate)) {
        $errors['addressCandidate'] = "Моля въведете Адрес";
    }

    if (empty($cityCandidate)) {
        $errors['cityCandidate'] = "Моля въведете Град";
    }

    if (empty($zipCandidate)) {
        $errors['zipCandidate'] = "Моля въведете Пощенски код";
    }

    if (empty($phoneCandidate)) {
        $errors['phoneCandidate'] = "Моля въведете Телефон за връзка";
    }

    if (empty($birthCandidate)) {
        $errors['birthCandidate'] = "Моля въведете Дата на раждане";
    }

    if (empty($workexperienceCandidate)) {
        $errors['workexperienceCandidate'] = "Моля въведете Трудов стаж";
    }

    if (empty($educationexperienceCandidate)) {
        $errors['educationexperienceCandidate'] = "Моля въведете Образование и обучение";
    }

    if (empty($personalexperienceCandidate)) {
        $errors['personalexperienceCandidate'] = "Моля въведете Лични умения";
    }

    if (!filter_var($emailCandidate, FILTER_VALIDATE_EMAIL)) {
        $errors['emailCandidate'] = "Имейла е невалиден.";
    }

    if (!is_numeric($zipCandidate)) {
        $errors['zipCandidate'] = "Невалиден Пощенски код";
    }


    if (count($errors) === 0) {
        $queryS = "SELECT id FROM tb_register_client WHERE username='$usernameClient'";
        $results = mysqli_query($conn, $queryS);
        if (mysqli_num_rows($results) == 1) {
            while ($row = $results->fetch_assoc()) {
                $id = $row["id"];
            }
            $insert = "INSERT INTO tb_candidates (firstname,lastname,email,address,city,zipcode,phone,birthdate,workexperience,educationexperience,personalexperience,profileid,status,jobid) 
            VALUES ('$firstnameCandidate', '$lastnameCandidate', '$emailCandidate','$addressCandidate','$cityCandidate', $zipCandidate, '$phoneCandidate', '$birthCandidate', '$workexperienceCandidate', '$educationexperienceCandidate', '$personalexperienceCandidate', $id, 5, $jobid)";
            $query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
            if ($query == 1) {
                $message = "Кандидатствахте успешно!";
            }
        }
    }
}
