<?php

require 'classes.php';
// fetching the data from excel sheet
if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
   // getting user's input
   $value = $_POST['input'];
 // looping throw the excel sheet data
   foreach( $xlsx->rows() as $r ) {
       if ($r[0] == $value ){
           checkRow($r);
       }
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
