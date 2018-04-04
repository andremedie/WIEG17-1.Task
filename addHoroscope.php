<?php
session_start();

include('class.php');


if (isset($_POST['personnummer'])){
    $personnummer = $_POST['personnummer'];
    $Andre = new Horoscope($personnummer);
    
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['personnummer'])) {
        $_SESSION['personnummer'] = $Andre->horoskop;
    }else{
        echo "";
    }
    
    
} else {
    echo "";
}



?>