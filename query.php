<?php

require 'classes.php';

if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
   // echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';




   $value = $_POST['input'];

   foreach( $xlsx->rows() as $r ) {
       if ($r[0] == $value ){
           checkRow($r);
       }
           // print_r ($r);

       }

        // $post = $r->getCell('A'.$r)->getValue();

       // echo '<tr><td>'.implode('</td><td>', $r).'</td></tr>';
   }

   // echo '</table>';
   // or $xlsx->toHTML();
} else {
   echo SimpleXLSX::parseError();
}




function checkRow($r){
    if($r[6] == 'X' ){
         echo '<div> Sunday : <p style="color:green;"> available </p></div>';

    }
    else{
        echo '<div> Monday : <p style="color:red;> unavailable </p></div>';
    }
    if($r[7] == 'X' ){
        echo '<div style="color:green;"><p> available </p></div>';

   }
   else{
       echo '<div style="color:red;"><p> unavailable </p></div>';
    }
    if($r[8] == 'X' ){
        echo '<div style="color:green;"><p> available </p></div>';

   }
   else{
       echo '<div style="color:red;"><p> unavailable </p></div>';
    }
    if($r[9] == 'X' ){
        echo '<div style="color:green;"><p> available </p></div>';

   }
   else{
       echo '<div style="color:red;"><p> unavailable </p></div>';
    }
    if($r[10] == 'X'){
        echo '<div style="color:green;"><p> available </p></div>';

   }
   else{
       echo '<div style="color:red;"><p> unavailable </p></div>';
    }
    if($r[11] == 'X' ){
        echo '<div style="color:green;"><p> available </p></div>';

   }
   else{
       echo '<div style="color:red;"><p> unavailable </p></div>';
    }
    if($r[12] == 'X' ){
        echo '<div ><p style="color:green;"> available </p></div>';

   }
   else{
       echo '<div style="color:red;"><p> unavailable </p></div>';
    }

}


 ?>
