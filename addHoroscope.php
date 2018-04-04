<?php
session_start();
include('class.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['personnummer'])) {
        if (isset($_POST['personnummer'])){
            $personnummer = $_POST['personnummer'];
            $Andre = new Horoscope($personnummer);
            
            }
        $_SESSION['personnummer'] = $Andre->horoskop;

    }else{
        echo "false";
    }
    
    
} else {
    echo "false";
}



?>