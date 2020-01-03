<?php

require 'classes.php';

if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
   




   $value = $_POST['input'];

   foreach( $xlsx->rows() as $r ) {
       if ($r[0] == $value ){
           checkRow($r);
       }


       }


}else {
   echo SimpleXLSX::parseError();
}




function checkRow($r){
    $list =['Sunday','Monday','Tuesday','Wedsday','Thursday','Friday', 'Saturday' ];


    $i = 0 ;

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
