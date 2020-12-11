<?php 
//    $webApplicationTitle = "Fat Cat Web Store";
//    $isUserLoggedIn = false;
//    $webApplicationVisitorUsername = "";
    
    //
    //var_dump($_GET);
    //var_dump(isset($_GET['username']));
//    if(isset($_GET['username'])){
//        $webApplicationVisitorUsername = $_GET['username'];
//    }
//
//    function application_slogan($webApplicationTitle,$webApplicationVisitorUsername) {
//        echo "<strong> $webApplicationTitle </strong>";
//        echo "<span>$webApplicationVisitorUsername</span>";
//    }
//    function application_slogan($a,$b) {
//        echo "<strong> $a </strong>";
//        echo "<span>$b</span>";
//    }
//    function main_menu($isUserLoggedIn){
//        echo '<ul>';
//        if($isUserLoggedIn) :
//            echo '<li class="list-item"><a href="index.php">Home</a></li>';
//            echo '<li class="list-item"><a href="store.php">Store</a></li>';
//        else :
//            echo '<li class="list-item"><a href="index.php">Home</a></li>';
//            echo '<li class="list-item"><a href="signin.php">Sign in</a></li>';
//            echo '<li class="list-item"><a href="signup.php">Sign up</a></li>';
//        endif;
//        echo '</ul>';
//    }
//    

include './src/application.php';
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fat Cat Web Store</title>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
        
        <div id="header">
            
            <div id="slogan"> 
                <?php 
                //echo "<strong>" ; 
                //echo $webApplicationTitle;
                //echo "</strong>"; 
                  
                //echo "<strong>" . $webApplicationTitle . "</strong>"; //concatenation
               
                // '' ; - standart string
                // 
                // ""; - parse variable data
                // echo "<strong> $webApplicationTitle </strong>";
                // echo "<span>$webApplicationVisitorUsername</span>;
                slogan();
                // application_slogan("My Cool Fat Cat Store","Dayana");

                
                
                
                
                ?>
                
            </div>
            
            
            
            <div id="top-navigation">
                <?php 
                    main_menu();
                ?>
                <!--<ul>-->
                    <?php 
//                        if($isUserLoggedIn) { //true
//                            echo "<li>Home</li> <li>Store</li>";
//                        }
//                        else {
//                            echo "<li>Home</li> <li>Sign In</li> <li>Sign up</li>";
//                        }      
                    ?>
                    
                    <?php //$isUserLoggedIn = false; ?>
                    <?php //if($isUserLoggedIn) : ?>
                        <!--<li><a href="index.php">Home</a></li>-->
                        <!--<li><a href="store.php">Store</a></li>-->
                    <?php// else :  ?>
                       <!--<li><a href="index.php">Home</a></li>-->
                       <!--<li><a href="signin.php">Sign in</a></li-->
                       <!--<li><a href="signup.php">Sign up</a></li>-->
                    <?php //endif  ?>             
                <!--</ul>-->
            </div>
        </div>
        
        <div id="wrapper">
            <div id="body">
                
                <?php if(!is_user_logged_in()) : ?>
                <form id="form-welcome-user" method="POST">
                    <input type="text" name="username" placeholder="What is your name?">
                    <input type="text" name="userage" placeholder="How old are you?">
                    <input type="submit" value="Hello">
                </form> 
                <a href="terms.php">Terms and Conditions</a>
                <?php endif; ?>
                
                <form method="POST">
                    <input type="radio" id="home" name="page" value="home">
                    <label for="home">Home</label><br>
                    <input type="radio" id="signin" name="page" value="signin">
                    <label for="signin">Sign in</label><br>
                    <input type="radio" id="signup" name="page" value="signup">
                    <label for="signup">Sign up</label><br>
                    <input type="submit" value="Go to page" name="submit" >
                </form>
                 <?php
                    radiobtn_redirect();
                   ?>
     
                
            </div>
        </div>
        
        <div id="footer">
            
        </div> 
        <?php
        
        ?>
    </body>
</html>
