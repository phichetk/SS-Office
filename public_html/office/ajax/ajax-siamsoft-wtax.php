<?php
header("Content-Type: text/plain; charset=UTF-8");
########## Load Configuration ##########

require("../../../office-data/config/default-config.php");
require("../../../office-data/classes/adminlogin.php");

mysql_connect(HOSTNAME_RECEIPT, USERNAME_RECEIPT, PASSWORD_RECEIPT) or die("Error DB Connect ");
mysql_select_db(DATABASE_WTAX) or die("Error DB Select ");
mysql_query("SET NAMES UTF-8");
//mysql_query("SET NAMES TIS620");



########## Action ##########
$adminlogin = new adminlogin();

$CustomerName = $_REQUEST['CustomerName'];
if($CustomerName!=""){


$sql  = " SELECT * FROM ss_taxw_apcode ";
$sql .= " WHERE STATUS  = '1'  ";
$sql .= " AND APName LIKE '%".$CustomerName."%'";
$sql .= "   ";
$sql .= " LIMIT 0 , 5 ";

//$sql="SELECT * FROM ss_billing_customer  WHERE CompanyName LIKE '%".$CustomerName."%' LIMIT 0 , 5 ";
//echo $sql."1ช";

$result=$adminlogin->query($sql);
     
    //echo "xx".mysql_num_rows($result);
    if(mysql_num_rows($result)>0){  
		echo "<div><table style='border: 1px solid #999; font-family: verdana; arial, sans-serif; font-size: 13px; padding: 4px; margin: 0 0 5px 0; cursor: default; color: red;' id='search'>";
		while($row = mysql_fetch_array($result)) { 
			$APID          = $row['APID'];
			$APName = $row['APName'];
			$APAddress     = $row['APAddress'];
            
			echo "<tr><b>";
			echo "<td onclick=\"ClickSelectDealer('".$APID."','".$APName."')\">".stripslashes($APID)."</td>";
			echo "<td onclick=\"ClickSelectDealer('".$APID."','".$APName."')\">".$APName."</td>";
			echo "<td onclick=\"ClickSelectDealer('".$APID."','".$APName."')\">".$APAddress."</td></b></tr>";
		} 
		echo "</table></div>";
	}
}    
?>