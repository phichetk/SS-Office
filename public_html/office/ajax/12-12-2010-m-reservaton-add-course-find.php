<?php
########## Load Configuration ##########
require("../../../config/default-config.php");
require("../../../config/db-connect.php");
require("../../../classes/adminlogin.php");


########## Action ##########
$adminlogin = new adminlogin();

$coursecode = $_REQUEST["coursecode"];
if($coursecode!=""){
	//$sql = "SELECT title FROM autocomplete WHERE title LIKE '%$keyword%' ";
	//$result = mysql_query($sql);
$sql="SELECT ID , CourseCode FROM ws_course_detail  WHERE CourseCode LIKE '%".$coursecode."%' LIMIT 0 , 5";
//echo $sql;


$result=$adminlogin->query($sql);

	if(mysql_num_rows($result)>0){  
		echo "<table style='border: 1px solid #999; font-family: verdana; arial, sans-serif; font-size: 11px; padding: 4px; margin: 0 0 5px 0; cursor: default; color: red;' id='search'>";
		while($row = mysql_fetch_array($result)) { 
			$courseID = $row['ID'];
			$coursecode = $row['CourseCode'];
			echo "<tr><b><td onclick='coursepopulateName(this.innerHTML)'>".stripslashes($coursecode)."</td></b></tr>";
		} 
		echo "</table>";
	}

}
?>