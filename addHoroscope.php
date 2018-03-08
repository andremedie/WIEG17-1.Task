<?php


include('class.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $_SESSION['horoskop'] = $Andre->horoskop;	// Våra horoskop-cookies finns
	// identifiera dessa värden
    
   //echo "Sparat nytt horoskop!";
    
    
} else {
    echo "errors";
}
//include("viewHoroscope.php");


?>