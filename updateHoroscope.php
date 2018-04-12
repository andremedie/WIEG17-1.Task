<?php 
session_start();
parse_str(file_get_contents("php://input"), $_PUT);
include('class.php');


if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    
	if (isset($_SESSION['personnummer'])) {
	
		if (isset($_PUT['personnummer'])){
			$personnummer = $_PUT['personnummer'];
			$Andre = new Horoscope($personnummer);
			
			if($Andre->horoskop != "Okänd Horoskop"){
				$_SESSION['personnummer'] = $Andre->horoskop;
				echo "true";
			}
			else{
				echo "false"; // Fel personnummer
			}
			
		}
		else{
			echo "false"; // Inget personnummer medskickat
		}
	
	}else{
		echo "false"; // finns inget horoskop sedan innan
	}

} else {
    echo "false"; // fel method
}


?>