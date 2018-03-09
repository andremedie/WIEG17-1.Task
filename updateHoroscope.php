<?php 
session_start();
parse_str(file_get_contents("php://input"), $_PUT);
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    
    if ($_SESSION['horoskop'] == null){
        
        echo "Inget uppdaterat?";
        
    } else {
        $_POST['personnummer'] = $_PUT['personnummer'];    
        include('class.php');
        
        $_SESSION['horoskop'] = $Andre->horoskop;	// Våra horoskop-cookies finns
        echo $Andre->horoskop;

  }
    
    
    
    
} else {
    echo "errors";
}
?>