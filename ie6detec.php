<?php
/*
 Plugin Name: IE6 und IE7 Detection Script
 Description: Erkennt den IE6 und IE7 Browser und empfiehlt dem User auf dezenter Art- und weise einen aktuellen Browser zu installieren.
 Version:     1.0
 Author:      Stephan Walcher
 Plugin URI:  http://www.prometeo.de/
 Author URI:  http://www.prometeo.de/


 */
function detectie6ie7() {
	
	
		echo "\n";
	
		echo "\n<!-- Infobar start -->\n";
		 echo '<script type="text/javascript" src="http://www.microsoft.com/germany/msdn/components/ie/ieinfobar.js"> </script>';
	
	
		echo "\n<!-- Infobar end-->\n";
		

}


add_action('wp_footer', 'detectie6ie7');


?>