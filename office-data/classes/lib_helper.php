<?php
///// this class for normal help
###########
class helper { 
	function GET_Month($mm="") {   
	 $_month_name = array("1"=>"���Ҥ�",  "2"=>"����Ҿѹ��",  "3"=>"�չҤ�",    
		"4"=>"����¹",  "5"=>"����Ҥ�",  "6"=>"�Զع�¹",    
		"7"=>"�á�Ҥ�",  "8"=>"�ԧ�Ҥ�",  "9"=>"�ѹ��¹",    
		"10"=>"���Ҥ�", "11"=>"��Ȩԡ�¹",  "12"=>"�ѹ�Ҥ�");  
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