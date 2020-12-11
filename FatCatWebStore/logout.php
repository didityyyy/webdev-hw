<?php 
   include './src/application.php';
   
   //session remove
   //$_SESSION['user_name'] = "";
   //$_SESSION['is_user_logged_in'] = false;
   session_destroy();
  //prenasochvane sled logout kum index.php
   //header('Location: index.php')
   redirect('index.php');

