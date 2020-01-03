<?php
require 'classes.php';
if ( $xlsx = SimpleXLSX::parse('data.xlsx') ) {
	echo '<table border="1" cellpadding="3" style="border-collapse: collapse">';
	foreach( $xlsx->rows() as $r ) {
		echo '<tr><td>'.implode('</td><td>', $r ).'</td></tr>';
	}
	echo '</table>';
	// or $xlsx->toHTML();
} else {
	echo SimpleXLSX::parseError();
}



 ?>
