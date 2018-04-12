<?php
session_start();
include("class.php");

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_SESSION['personnummer'])){ 
        echo $_SESSION['personnummer'];  
   }
} 


?>