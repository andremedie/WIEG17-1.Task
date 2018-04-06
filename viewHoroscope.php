<?php
session_start();
include("class.php");

if($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_SESSION['personnummer'])){ // Finns ett horoskåp
        echo $_SESSION['personnummer'];  // Skriv ut det
   }
} 


?>