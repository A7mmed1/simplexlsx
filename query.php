<?php

require 'classes.php';
if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
   echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';




   $value = $_POST['input'];

   foreach( $xlsx->rows() as $r ) {
       if ($r[0] == $value ){
           echo $value ;
       }
       else {
           echo "not found";
       }
        // $post = $r->getCell('A'.$r)->getValue();

       // echo '<tr><td>'.implode('</td><td>', $r).'</td></tr>';
   }

   echo '</table>';
   // or $xlsx->toHTML();
} else {
   echo SimpleXLSX::parseError();
}







 ?>
