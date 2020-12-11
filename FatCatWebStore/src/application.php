<?php

session_start();

//echo "========";
//echo "<br>";
//var_dump($_SESSION);
//$isUserLoggedIn = false;
//$webApplicationVisitorUsername = "";
//if (isset($_GET['username'])) {
//    $webApplicationVisitorUsername = $_GET['username'];
//}
if (isset($_POST['username'])) {
    //   $webApplicationVisitorUsername = $_POST['username'];
    //$isUserLoggedIn = true;
    $_SESSION['user_name'] = $_POST['username'];
    //$_SESSION['is_user_logged_in'] = $isUserLoggedIn;    
    $_SESSION['is_user_logged_in'] = true;
}

function is_user_logged_in() {

    if (isset($_SESSION['is_user_logged_in'])) {
        return $_SESSION['is_user_logged_in'];
    }
    return false;
}

function get_username() {
    if (isset($_SESSION['user_name'])) {
        return $_SESSION['user_name'];
    }
    return "";
}

function application_slogan($webApplicationTitle) {
    echo "<strong class= 'logo'> $webApplicationTitle </strong>";
}

function greet_visitor($visitorUsername) {
    $visitorGreatingMessage = rand(1, 10);

    $shouldGreatingBePleasant = $visitorGreatingMessage >= 1 && $visitorGreatingMessage <= 5;
    $shouldGreatingBeRude = $visitorGreatingMessage >= 6 && $visitorGreatingMessage <= 8;
    $shouldGreatingBeUsual = $visitorGreatingMessage == 9 || $visitorGreatingMessage == 10;

    if ($visitorUsername) {

        if ($shouldGreatingBePleasant) {
            echo "<span> What's up $visitorUsername</span>";
        } else if ($shouldGreatingBeRude) {
            echo "<span> You are big $visitorUsername</span>";
        } else if ($shouldGreatingBeUsual) {
            echo "<span> You are cool $visitorUsername</span>";
        } else {
            echo"<span>Hello in </span>";
        }
    } else {
        echo"<span>Hello guest</span>";
    }
}

function slogan() {

    $webApplicationTitle = "Fat Cat Web Store";
    application_slogan($webApplicationTitle);
    //greet_visitor($visitorUsername);
    //$returnedValueGreeting = greet_visitor_greeting($visitorUsername);
    echo greet_visitor_greeting(); //
}

function main_menu() {

    echo '<ul>';
    if (is_user_logged_in()) :
        echo '<li class="list-item"><a href="index.php">Home</a></li>';
        echo '<li class="list-item"><a href="store.php">Store</a></li>';
        echo '<li class="list-item"><a href="logout.php">Log out</a></li>';

    else :
        echo '<li class="list-item"><a href="index.php">Home</a></li>';
        echo '<li class="list-item"><a href="signin.php">Sign in</a></li>';
        echo '<li class="list-item"><a href="signup.php">Sign up</a></li>';
    endif;
    echo '</ul>';
}

function greet_visitor_greeting() {
    $visitorGreatingMessage = rand(1, 10);

    $shouldGreatingBePleasant = $visitorGreatingMessage >= 1 && $visitorGreatingMessage <= 5;
    $shouldGreatingBeRude = $visitorGreatingMessage >= 6 && $visitorGreatingMessage <= 8;
    $shouldGreatingBeUsual = $visitorGreatingMessage == 9 || $visitorGreatingMessage == 10;

    $visitorUsername = get_username();

    if (!$visitorUsername) {
        return "<span>Hello guest </span>";
    }

    if ($shouldGreatingBePleasant) {
        return "<span> What's up $visitorUsername</span>";
    }
    if ($shouldGreatingBeRude) {
        return "<span> You are big $visitorUsername</span>";
    }
    if ($shouldGreatingBeUsual) {
        return "<span> You are cool $visitorUsername</span>";
    }

    return "<span> HELLO </span>";
}

function redirect($location) {
    header($location);
}

function radiobtn_redirect() {
    if (isset($_POST['submit'])) {
        $page = $_POST['page'];
    } else {
        $page = NULL;
    }
//    if ($pagel != NULL) {
        if ($page == "home") {
             header('Location: index.php');
        } else if ($page == "signin") {
            header('Location: signin.php');
        } else if ($page == "signup") {
             header('Location: signup.php');
        }
//    } else {
//        echo "You must select an answer";
//    }
}

//unecessary closing delimeter 