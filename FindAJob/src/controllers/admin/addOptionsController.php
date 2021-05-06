<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/FindAJob/src/database/db.php';

$message = NULL;
$message2 = NULL;
$errors = array();
$errors2 = array();

if (isset($_POST['category_profession_tokken']) && $_POST['category_profession_tokken'] == 1) {
    
    $category_profession_title = $_POST['category_profession_title'];
    
    // $titleQuery = "SELECT * FROM tb_category_profession WHERE title=? LIMIT 1";
    // $stmt = $conn->prepare($titleQuery);
    // $stmt->bind_param('s',$category_profession_title);
    // $stmt->execute();
    // $result = $stmt->get_result();
    // $userCount = $result->num_rows;
    // $stmt->close();

    // if($userCount > 0) {
    //     $message['title'] = "Тази категория вече съществува";
    // }
    if(empty($category_profession_title)) {
        $errors['category_profession_title'] = "Моля въведете Категория";
    }

    if (count($errors) === 0) {
        $sql = "INSERT INTO tb_category_profession (title) VALUES (?)";
            
            $stmt = $conn->prepare($sql);

            $stmt->bind_param('s',$category_profession_title);
            
            if($stmt->execute()) {
                $title_id = $conn->insert_id;
                $_SESSION['id'] = $title_id;
                $_SESSION['title'] = $category_profession_title;
            }
        $message ='Категорията е успешно добавена!';
    }
}

if (isset($_POST['category_city_tokken']) && $_POST['category_city_tokken'] == 1) {
    
    $category_city_title = $_POST['category_city_title'];

    if(empty($category_city_title)) {
        $errors2['category_city_title'] = "Моля въведете Град";
    }

    if (count($errors2) === 0) {
        $sql = "INSERT INTO tb_city (title) VALUES (?)";
            
            $stmt = $conn->prepare($sql);

            $stmt->bind_param('s',$category_city_title);
            
            if($stmt->execute()) {
                $title_id = $conn->insert_id;
                $_SESSION['id'] = $title_id;
                $_SESSION['title'] = $category_city_title;
            }
        $message2 ='Градът е успешно добавен!';
    }
}