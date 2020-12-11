<?php 
   include './src/application.php';
   
   $cat1Name = 'Maca';
   $cat1Price = '10';
   $cat1Location = 'Plovdiv';
   
//   $catCollection = array(
//       
//   );
   $catNameCollection = [
       "Maca","Pisana","Kotka Kotka","Dundio","Obama"
   ];
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
                <h2>List with cats:</h2>
                <div> <?php echo $catNameCollection[0]; ?> </div>
                <div> <?php echo $catNameCollection[1]; ?> </div>
                <div> <?php echo $catNameCollection[2]; ?> </div>
                <div> <?php echo $catNameCollection[3]; ?> </div>
                <hr>
                <?php
          
                    for ( $i = 0 ; $i < count($catNameCollection) ; $i++) {
                        echo "$catNameCollection[$i]";
                        echo "<br>";
                    }
                ?>


            </div>
        </div>
        
        <div id="footer">
            
        </div> 
        <?php
        
        ?>
    </body>
</html>


