<?php 
parse_str(file_get_contents("php://input"), $_PUT);
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    
    $_SESSION['horoskop'] = $Andre->horoskop;	// Våra horoskop-cookies finns
	// identifiera dessa värden
    
   //echo "Sparat nytt horoskop!";
    
    
} else {
    echo "errors";
}
?>