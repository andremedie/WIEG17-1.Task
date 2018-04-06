<?php
session_start();
require("class.php");
if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
	if (isset($_SESSION["personnummer"])){
		unset($_SESSION["personnummer"]);
		echo "true";
	}
	else{
		echo "false"; // Finns ingen session
	}
}
else{
	echo "false"; // fel metod
}
?>