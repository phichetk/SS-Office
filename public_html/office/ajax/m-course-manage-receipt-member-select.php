<?php
header("Content-Type: text/plain; charset=UTF-8");
########## Load Configuration ##########
require("../../../config/default-config.php");
require("../../../config/db-connect.php");
require("../../../classes/adminlogin.php");


########## Action ##########
$adminlogin = new adminlogin();

$membercode = $_REQUEST["membercode"];
if($membercode!=""){
	//$sql = "SELECT title FROM autocomplete WHERE title LIKE '%$keyword%' ";
	//$result = mysql_query($sql);
//$cs1 = "SET character_set_results=utf8";
$sql="SELECT ID,CompanyName,MemberType,CoTitle  FROM ws_member_detail  WHERE CompanyName LIKE '%".$membercode."%' LIMIT 0 , 10 ";
//echo $sql;


$result=$adminlogin->query($sql);
//$resultcs1=$adminlogin->query($cs1);

	if(mysql_num_rows($result)>0){  
		echo "<table style='border: 1px solid #999; font-family: verdana; arial, sans-serif; font-size: 11px; padding: 4px; margin: 0 0 5px 0; cursor: default; color: red;' id='search'>";
		while($row = mysql_fetch_array($result)) { 
			$ID = trim($row['ID']);
			$MemberType = $row['MemberType'];
			$CoTitle = $row['CoTitle'];
			$CompanyName = $row['CompanyName'];


			echo "		<tr>";
			echo "		<b>";
            echo "			<td onclick=\"MemberOnGo('".$ID."')\">".stripslashes($ID)."</td>";
			echo "			<td onclick=\"MemberOnGo('".$ID."')\">".stripslashes($MemberType)."</td>";
			echo "			<td onclick=\"MemberOnGo('".$ID."')\">".stripslashes($CoTitle)."</td>";
			echo "			<td onclick=\"MemberOnGo('".$ID."')\">".stripslashes($CompanyName)."</td> ";				
		  	//echo "			<td onclick=\"alert('".$ID."')\">".$ID."</td>";
			echo "		</b>";
			echo "		</tr>";
		} 
		echo "</table>";
	}

}
?>