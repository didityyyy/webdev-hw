<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$errors = array();
$message = NULL;

if (isset($_POST['contact-send'])) {

    $visitor_name          = $_POST['contact-name'];
    $visitor_email         = $_POST['contact-email'];
    $visitor_message       = $_POST['contact-question'];

    if (empty($visitor_name)) {
        $errors['contact-name'] = "Моля въведете Име";
    }

    if (empty($visitor_email)) {
        $errors['contact-email'] = "Моля въведете Имейл";
    }

    if (empty($visitor_message)) {
        $errors['contact-question'] = "Моля напишете вашето запитване";
    }

    if (!filter_var($visitor_email, FILTER_VALIDATE_EMAIL)) {
        $errors['contact-email'] = "Имейла е невалиден.";
    }

    if (count($errors) === 0) {
        $email_from = 'selena99selena@abv.bg';

        $email_subject = "New Form Submission";

        $email_body = "User Name: $visitor_name.\n" .
            "User Email: $visitor_email.\n" .
            "User Message: $visitor_message.\n";

        $to = "diana99dimitrova@gmail.com"; //send to

        $headers = "From $email_from \r\n";
        $headers .= "Reply-To $visitor_email \r\n";
        mail($to, $email_subject, $email_body, $headers);

        $message = "Вашето запитване е изпратено успешно!";
    }
}