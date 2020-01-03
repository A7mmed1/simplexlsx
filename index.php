
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title></title>
     </head>
     <body>
         <h1>Challenge</h1>
         <div class="">


         <?php
         require 'classes.php';
         if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
         	echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';





         	foreach( $xlsx->rows() as $r ) {
                 // $post = $r->getCell('A'.$r)->getValue();

         		// echo '<tr><td>'.implode('</td><td>', $r).'</td></tr>';
         	}

         	echo '</table>';
         	// or $xlsx->toHTML();
         } else {
         	echo SimpleXLSX::parseError();
         }


         // echo $xlsx->getCell(0, 'B2');


          ?>
           </div>
          <div class="">
              <form class="" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
>
                   <p> Postal code</p><input type="text" name="input" value="">
                   <input type="submit" name="" value="Check">
              </form>


          </div>

         <?php
            $value = $_POST['input'];
            if ($value == true ){
                echo $r[$value];
            }
            else {
                echo "not found";
            }


          ?>

     </body>
 </html>
