<?php

require 'classes.php';
if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
   // echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';




   $value = $_POST['input'];

   foreach( $xlsx->rows() as $r ) {
       if ($r[0] == $value ){
           // print_r ($r);
           echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';
           if($r[6] == x ){
                echo 'green';

           }
           else{
               echo 'red';
           }
           if($r[7] == x ){
                echo 'green';
           }
           else{
               echo 'red';
           }
           if($r[8] == x ){
               echo 'green';
           }
           else{
               echo 'red';
           }
           if($r[9] == x ){
               echo 'green';
           }
           else{
               echo 'red';
           }
           if($r[10] == x ){
               echo 'green';
           }
           else{
               echo 'red';
           }
           if($r[11] == x ){
               echo 'green';
           }
           else{
               echo 'red';
           }
           if($r[12] == x ){
               echo 'green';
           }
           else{
               echo 'red';
           }
            echo '</table>';

       }

        // $post = $r->getCell('A'.$r)->getValue();

       // echo '<tr><td>'.implode('</td><td>', $r).'</td></tr>';
   }

   // echo '</table>';
   // or $xlsx->toHTML();
} else {
   echo SimpleXLSX::parseError();
}







 ?>
