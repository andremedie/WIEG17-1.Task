<?php
session_start();
include('class.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_SESSION['personnummer'])) {
        if (isset($_POST['personnummer'])){
            $personnummer = $_POST['personnummer'];
            $Andre = new Horoscope($personnummer);
			if($Andre->horoskop != "Okänd Horoskop"){
				$_SESSION['personnummer'] = $Andre->horoskop;
				echo "true";
			}
			else{
				echo "false"; // Felaktigt personnummer
			}
        }
		else{
			echo "false"; // Inget personnummer i POST
		}

    }else{
        echo "false"; // Ej skriva över befintligt horoskop
    }
} else {
    echo "false"; // Fel metod
}



?>