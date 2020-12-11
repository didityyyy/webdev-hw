<?php 
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
                    slogan();

                ?>
                
            </div>
            
            
            
            <div id="top-navigation">  
                    <?php 
                        main_menu();
                    
                    
                    ?>
             
            </div>
        </div>
        
        <div id="wrapper">
            <div id="body">
                SIGN UP
           
            </div>
        </div>
        
        <div id="footer">
            
        </div> 
        <?php
        
        ?>
    </body>
</html>

