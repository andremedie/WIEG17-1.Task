<?php
session_start();

include('class.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['personnummer'])) {
        $_SESSION['personnummer'] = $Andre->horoskop;
    }else{
        echo "";
    }
    
    
} else {
    echo "errors";
}
//include("viewHoroscope.php");


?>