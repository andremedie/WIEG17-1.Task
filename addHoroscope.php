<?php
session_start();

include('class.php');

// checkRequest("POST");

// if (!isset($_POST['horoskop'])) {
//     exit("false");
// } 
// if (isset($_SESSION['personnummer'])) {
//     exit("false");
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_SESSION['personnummer'] = null) {
        $_SESSION['horoskop'] = $Andre->horoskop;
    }else{
        echo "";
    }
    
    
} else {
    echo "errors";
}
//include("viewHoroscope.php");


?>