<?php
///// this class for normal help
###########
class helper { 
	function GET_Month($mm="") {   
	 $_month_name = array("1"=>"มกราคม",  "2"=>"กุมภาพันธ์",  "3"=>"มีนาคม",    
		"4"=>"เมษายน",  "5"=>"พฤษภาคม",  "6"=>"มิถุนายน",    
		"7"=>"กรกฎาคม",  "8"=>"สิงหาคม",  "9"=>"กันยายน",    
		"10"=>"ตุลาคม", "11"=>"พฤศจิกายน",  "12"=>"ธันวาคม");  
	 $monthN= $_month_name[$mm];  
	return $monthN;  
	}  
################

##################
	function session_timeout(){
	 ///////////////////////////////////

	// set timeout period in seconds
	$inactive = 7200;
	 
	// check to see if $_SESSION['timeout'] is set
	if(isset($_SESSION['timeout']) ) {
		$session_life = time() - $_SESSION['start'];
		if($session_life > $inactive)
			{ session_destroy(); header("Location: main.php?page=logout"); }
	}
	$_SESSION['timeout'] = time();
	//////////////////////////////////
	}
####################
}
?>