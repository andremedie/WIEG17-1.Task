<?php
session_start();
include("addHoroscope.php");
if($_SERVER['REQUEST_METHOD'] == 'GET') {
    
    
 
    
        echo $_SESSION['horoskop'] = $Andre->horoskop;
        //echo $Andre->horoskop . ".";

} else {
    echo "error at viewHoroscope.php";
}



?>