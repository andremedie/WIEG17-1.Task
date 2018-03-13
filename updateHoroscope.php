<?php 
session_start();
parse_str(file_get_contents("php://input"), $_PUT);
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $_POST['personnummer'] = $_PUT['personnummer'];
    include('class.php');
     if (isset($_SESSION['personnummer'])) {
         $_SESSION['personnummer'] = $Andre->horoskop;
     }else{
         echo "";
    }
    
    
} else {
    echo "errors";
}


?>