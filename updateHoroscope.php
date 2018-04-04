<?php 
session_start();
parse_str(file_get_contents("php://input"), $_PUT);
include('class.php');

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    if (isset($_SESSION['personnummer'])) {
        $_POST['personnummer'] = $_PUT['personnummer'];
         $_SESSION['personnummer'] = $Andre->horoskop;
     echo "true";
     
        }else{
         echo "false1";
    }
    
    
} else {
    echo "false2";
}


?>