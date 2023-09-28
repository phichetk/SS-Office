<?php
header("Content-Type: text/plain; charset=UTF-8");
########## Load Configuration ##########
require("../../../office-data/config/default-config.php");
require("../../../office-data/classes/adminlogin.php");

mysql_connect(HOSTNAME_RECEIPT, USERNAME_RECEIPT, PASSWORD_RECEIPT) or die("Error DB Connect ");
mysql_select_db(DATABASE_RECEIPT) or die("Error DB Select ");
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client='utf8'");
mysql_query("SET character_set_connection='utf8'");
mysql_query("collation_connection = utf8_unicode_ci");
mysql_query("collation_database = utf8_unicode_ci");
mysql_query("collation_server = utf8_unicode_ci");

########## Action ##########
$adminlogin = new adminlogin();

$CustomerName = $_REQUEST['CustomerName'];
if($CustomerName!=""){

$sql="SELECT * FROM ss_billing_customer  WHERE CompanyName LIKE '%".$CustomerName."%' LIMIT 0 , 5 ";
//echo $sql;
$result=$adminlogin->query($sql);
     
    
    if(mysql_num_rows($result)>0){  
		echo "<div><table style='border: 1px solid #999; font-family: verdana; arial, sans-serif; font-size: 13px; padding: 4px; margin: 0 0 5px 0; cursor: default; color: red;' id='search'>";
		while($row = mysql_fetch_array($result)) { 
			$CustomerID          = $row['ID'];
			$CustomerCompanyName = $row['CompanyName'];
			$CustomerAddress     = $row['Address'];
			echo "<tr><b>";
			echo "<td onclick=\"ClickSelectCustomer('".$CustomerID."','".$CustomerCompanyName."')\">".stripslashes($CustomerID)."</td>";
			echo "<td onclick=\"ClickSelectCustomer('".$CustomerID."','".$CustomerCompanyName."')\">".$CustomerCompanyName."</td>";
			echo "<td onclick=\"ClickSelectCustomer('".$CustomerID."','".$CustomerCompanyName."')\" >".$CustomerAddress."</td></b></tr>";
		} 
		echo "</table></div>";
	}
}    
?>