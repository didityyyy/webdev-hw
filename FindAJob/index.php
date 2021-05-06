
<?php 
require_once('routes.php');

function __autoload($class) {   
    
    if(file_exists('/FindAJob/src/router/' . $class . '.php')) {
        require_once '/FindAJob/src/router/' . $class . '.php';
    } else if(file_exists('/FindAJob/src/message/' . $class . '.php')) {
         require_once '/FindAJob/src/message/' . $class . '.php';
    } //else if(file_exists('/FindAJob/src/front/profileCompany/' . $class . '.php')) {
    //     require_once '/FindAJob/src/front/profileCompany/' . $class . '.php';
    // } else if(file_exists('/FindAJob/src/front/profileHR/' . $class . '.php')) {
    //     require_once '/FindAJob/src/front/profileHR/' . $class . '.php';
    // } else if(file_exists('/FindAJob/src/front/profileUser/' . $class . '.php')) {
    //     require_once '/FindAJob/src/front/profileUser/' . $class . '.php';
    // } else if(file_exists('/FindAJob/src/front/' . $class . '.php')) {
    //     require_once '/FindAJob/src/front/' . $class . '.php';
    // }

}