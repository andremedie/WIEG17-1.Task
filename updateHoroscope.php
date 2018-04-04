<?php 
session_start();
parse_str(file_get_contents("php://input"), $_PUT);
include('class.php');

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    $_POST['personnummer'] = $_PUT['personnummer'];
     if (isset($_SESSION['personnummer'])) {
         $_SESSION['personnummer'] = $Andre->horoskop;
     }else{
         echo true;
    }
    
    
} else {
    echo false;
}


?>