<?php 
//session_start();
class Horoscope {
	
    public $personnummer;
    public $horoskop;

    function __construct($personnummer) {

		$this->personnummer = $personnummer;
	
		$this->horoskop = $this->identify_horoscope($personnummer);
    }
	
	function identify_horoscope($pnr){
		
		// olika typer av möjliga inskrivna personnummer
		// $pnr1 = "199104259999"; 	 len 12 start 4 siffran
		// $pnr2 = "9104259999"; 	 len 10 start 2 siffran
		// $pnr3 = "19910425"; 		 len 8  start 4 siffran
		// $pnr4 = "910425"; 		 len 6  start 2 siffran

		if(strlen($pnr)%4 == 0){
			$start = 4;
		}
		else{
			$start = 2;
		}

		$month = substr($pnr , $start , 2);
		$day = substr($pnr , $start+2 , 2);

		if( 	 ($month == 3 && 21 <= $day ) || ( $month == 4 && 19 >= $day ) ){
				return "Väduren";
		}
		else if( ($month == 4 && 20 <= $day ) || ( $month == 5 && 20 >= $day ) ){
				return "Oxen";
		}
		else if( ($month == 5 && 21 <= $day ) || ( $month == 6 && 20 >= $day ) ){
				return "Tvillingarna";
		}
		else if( ($month == 6 && 21 <= $day ) || ( $month == 7 && 22 >= $day ) ){
				return "Kräftan";
		}
		else if( ($month == 7 && 23 <= $day ) || ( $month == 8 && 22 >= $day ) ){
				return "Lejonet";
		}
		else if( ($month == 8 && 23 <= $day ) || ( $month == 9 && 22 >= $day ) ){
				return "Jungfrun";
		}
		else if( ($month == 9 && 23 <= $day ) || ( $month == 10 && 22 >= $day ) ){
				return "Vågen";
		}
		else if( ($month == 10 && 23 <= $day ) || ( $month == 11 && 21 >= $day ) ){
				return "Skorpionen";
		}
		else if( ($month == 11 && 22 <= $day ) || ( $month == 12 && 21 >= $day ) ){
				return "Skytten";
		}
		else if( ($month == 12 && 22 <= $day ) || ( $month == 1 && 19 >= $day ) ){
				return "Stenbocken";
		}
		else if( ($month == 1 && 20 <= $day ) || ( $month == 2 && 18 >= $day ) ){
				return "Vattumannen";
		}
		else if( ($month == 2 && 19 <= $day ) || ( $month == 3 && 20 >= $day ) ){
				return "Fiskarna";
		}
		else{
				return "Okänd Horoskop";
		}
		
	}
	
}

$personnummer = $_POST['personnummer'];
$Andre = new Horoscope($personnummer);
    //if (isset($_POST['personnummer'])){




?>