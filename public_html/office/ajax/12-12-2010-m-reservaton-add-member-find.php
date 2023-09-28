<?php
########## Load Configuration ##########
require("../../../config/default-config.php");
require("../../../config/db-connect.php");
require("../../../classes/adminlogin.php");


########## Action ##########
$adminlogin = new adminlogin();

$memberid = $_REQUEST["memberid"];
if($memberid!=""){
	//$sql = "SELECT title FROM autocomplete WHERE title LIKE '%$keyword%' ";
	//$result = mysql_query($sql);
$sql="SELECT Email FROM ws_member_detail  WHERE Email LIKE '%".$memberid."%' LIMIT 0 , 5";
//echo $sql;


$result=$adminlogin->query($sql);

	if(mysql_num_rows($result)>0){	  
		echo "<table style='border: 1px solid #999; font-family: verdana; arial, sans-serif; font-size: 11px; padding: 4px; margin: 0 0 5px 0; cursor: default; color: red;' id='search'>";
		while($row = mysql_fetch_array($result)) { 
			$getEmail = $row['Email'];
			echo "<tr><b><td onclick='memberpopulateName(this.innerHTML)'>".stripslashes($getEmail)."</td></b></tr>";
		} 
		echo "</table>";
	}

}
?>