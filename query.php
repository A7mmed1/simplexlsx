<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Challenge </title>
    </head>
    <body>
        <div class="container text-center p-5">

        <?php

        require 'classes.php';
        // fetching the data from excel sheet
        if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
           // getting user's input
           $value = $_POST['input'];
           $postalCodeFound = 0;
         // looping throw the excel sheet data
           foreach( $xlsx->rows() as $r ) {

               if ($r[0] == $value ){
                   checkRow($r);
                   $postalCodeFound = 1;
                   echo '<p class="btn btn-danger">this user is existing and his availablilty as above </p>';
                   break;
               }
           }
           if ($postalCodeFound == 0){
               echo '<p class="btn btn-danger">Postal code not found </p>';
           }
        }else {
           echo SimpleXLSX::parseError();
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
    </div>
        <div class="container text-center p-5">
            <div class="">

                <form class="" method="post" action="query.php" >
                     <p> Postal code</p><input type="text" name="input" value="">
                     <input type="submit" name="" value="Check">
                </form>
            </div>
        </div>

    </body>
</html>
