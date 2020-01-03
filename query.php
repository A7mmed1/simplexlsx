<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php

        require 'classes.php';
        // fetching the data from excel sheet
        if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
           // getting user's input
           $value = $_POST['input'];
         // looping throw the excel sheet data
           foreach( $xlsx->rows() as $r ) {
               $postalCodeFound = 0;


               if ($r[0] == $value ){
                   checkRow($r);
                   $postalCodeFound = 1;
               }
           }
        }else {
           echo SimpleXLSX::parseError();
        }
        if ($postalCodeFound == 0){
            echo 'Postal code not found';
        }
        // creat a function that loop throw the days and print them and show the availablilty
        function checkRow($r){
            $list =['Sunday','Monday','Tuesday','Wedsday','Thursday','Friday', 'Saturday' ];
            for($i=0 ; $i<= 6 ; $i++ ){
                if($r[$i+6] == 'X'){
                    echo '<p>'.$list[$i].'</p>' .'<div> <p style="color:green;"> available </p></div>';
                }
                else{
                    echo '<p>'.$list[$i].'</p>' .'<div> <p style="color:red;"> unavailable </p></div>';

                }
            }

        }

        ?>
        <div class="">
            <form class="" method="post" action="query.php" >

                 <p> Postal code</p><input type="text" name="input" value="">
                 <input type="submit" name="" value="Check">
            </form>
        </div>



    </body>
</html>
