<?php
header("Content-Type: text/plain; charset=UTF-8");
########## Load Configuration ##########
require("../../../office-data/config/default-config.php");
require("../../../office-data/classes/adminlogin.php");

mysql_connect(HOSTNAME_RECEIPT, USERNAME_RECEIPT, PASSWORD_RECEIPT) or die("Error DB Connect ");
mysql_select_db(DATABASE_RECEIPT) or die("Error DB Select ");
mysql_query("SET NAMES UTF-8");
//mysql_query("SET NAMES TIS620");




########## Action ##########
$adminlogin = new adminlogin();

$QuotationRef = $_REQUEST['QuotationRef'];
if($QuotationRef!=""){

$sql =" SELECT * FROM ss_quotation_transection ";
$sql.=" WHERE QuotationNo ";
$sql.=" LIKE '%".$QuotationRef."%' LIMIT 0 , 5 ";
//echo $sql;
$result=$adminlogin->query($sql);
 if(mysql_num_rows($result)>0){  
		echo "<div><table style='border: 1px solid #999; font-family: verdana; arial, sans-serif; font-size: 13px; padding: 4px; margin: 0 0 5px 0; cursor: default; color: red;' id='search'>";
		while($row = mysql_fetch_array($result)) {
            $ID                  = $row['ID'];
			$Domain1             = $row['Domain1'];
			//
            $Detail1             = $row['Detail1'];
            $Qty1                = $row['Qty1'];
            $Price1              = $row['Price1'];
            //
            $Detail2             = $row['Detail2'];
            $Qty2                = $row['Qty2'];
            $Price2              = $row['Price2'];
            //            
            $Detail3             = $row['Detail3'];
            $Qty3                = $row['Qty3'];
            $Price3              = $row['Price3'];
            //
            $Detail4             = $row['Detail4'];
            $Qty4                = $row['Qty4'];
            $Price4              = $row['Price4'];
            //
            $Detail5             = $row['Detail5'];
            $Qty5                = $row['Qty5'];
            $Price5              = $row['Price5'];
            //            
            $Detail6             = $row['Detail6'];
            $Qty6                = $row['Qty6'];
            $Price6              = $row['Price6'];
            
			//$CustomerAddress     = $row['Address'];
			echo "<tr><b>";
			echo "<td onclick=\"ClickSelectBill('".
            $ID
            ."','".
            $Domain1
            ."','".
            $Price1
            ."','".
            $Detail1
            ."','".
            $Qty1
            ."','".
            $Price2
            ."','".
            $Detail2
            ."','".
            $Qty2
            ."','".
            $Price3
            ."','".
            $Detail3
            ."','".
            $Qty3
            ."','".
            $Price4
            ."','".
            $Detail4
            ."','".
            $Qty4
            ."','".
            $Price5
            ."','".
            $Detail5
            ."','".
            $Qty5
            ."','".
            $Price6
            ."','".
            $Detail6
            ."','".
            $Qty6
            
            ."')\">".stripslashes($ID)."</td>";
            
			echo "<td onclick=\"ClickSelectBill('".
            $ID
            ."','".
            $Domain1
            ."','".
            $Price1
            ."','".
            $Detail1
            ."','".
            $Qty1
            ."','".
            $Price2
            ."','".
            $Detail2
            ."','".
            $Qty2
            ."','".
            $Price3
            ."','".
            $Detail3
            ."','".
            $Qty3
            ."','".
            $Price4
            ."','".
            $Detail4
            ."','".
            $Qty4
            ."','".
            $Price5
            ."','".
            $Detail5
            ."','".
            $Qty5
            ."','".
            $Price6
            ."','".
            $Detail6
            ."','".
            $Qty6
            
            ."')\">".$Domain1."</td>";
			echo "<td onclick=\"ClickSelectBill('".
            $ID
            ."','".
            $Domain1
            ."','".
            $Price1
            ."','".
            $Detail1
            ."','".
            $Qty1
            ."','".
            $Price2
            ."','".
            $Detail2
            ."','".
            $Qty2
            ."','".
            $Price3
            ."','".
            $Detail3
            ."','".
            $Qty3
            ."','".
            $Price4
            ."','".
            $Detail4
            ."','".
            $Qty4
            ."','".
            $Price5
            ."','".
            $Detail5
            ."','".
            $Qty5
            ."','".
            $Price6
            ."','".
            $Detail6
            ."','".
            $Qty6
            
            ."')\" >".$Detail1."</td></b></tr>";
		} 
		echo "</table></div>";
	}
} 

//////////////

$InvoiceRef = $_REQUEST['InvoiceRef'];
if($InvoiceRef!=""){

$sql =" SELECT * FROM ss_invoice_transection ";
$sql.=" WHERE InvoiceNo ";
$sql.=" LIKE '%".$InvoiceRef."%' LIMIT 0 , 5 ";
//echo $sql;
$result=$adminlogin->query($sql);
 if(mysql_num_rows($result)>0){  
		echo "<div><table style='border: 1px solid #999; font-family: verdana; arial, sans-serif; font-size: 13px; padding: 4px; margin: 0 0 5px 0; cursor: default; color: red;' id='search'>";
		while($row = mysql_fetch_array($result)) {
            $ID                  = $row['ID'];
			$Domain1             = $row['Domain1'];
			//
            $Detail1             = $row['Detail1'];
            $Qty1                = $row['Qty1'];
            $Price1              = $row['Price1'];
            //
            $Detail2             = $row['Detail2'];
            $Qty2                = $row['Qty2'];
            $Price2              = $row['Price2'];
            //            
            $Detail3             = $row['Detail3'];
            $Qty3                = $row['Qty3'];
            $Price3              = $row['Price3'];
            //
            $Detail4             = $row['Detail4'];
            $Qty4                = $row['Qty4'];
            $Price4              = $row['Price4'];
            //
            $Detail5             = $row['Detail5'];
            $Qty5                = $row['Qty5'];
            $Price5              = $row['Price5'];
            //            
            $Detail6             = $row['Detail6'];
            $Qty6                = $row['Qty6'];
            $Price6              = $row['Price6'];
            
			//$CustomerAddress     = $row['Address'];
			echo "<tr><b>";
			echo "<td onclick=\"ClickSelectBill('".
            $ID
            ."','".
            $Domain1
            ."','".
            $Price1
            ."','".
            $Detail1
            ."','".
            $Qty1
            ."','".
            $Price2
            ."','".
            $Detail2
            ."','".
            $Qty2
            ."','".
            $Price3
            ."','".
            $Detail3
            ."','".
            $Qty3
            ."','".
            $Price4
            ."','".
            $Detail4
            ."','".
            $Qty4
            ."','".
            $Price5
            ."','".
            $Detail5
            ."','".
            $Qty5
            ."','".
            $Price6
            ."','".
            $Detail6
            ."','".
            $Qty6
            
            ."')\">".stripslashes($ID)."</td>";
            
			echo "<td onclick=\"ClickSelectBill('".
            $ID
            ."','".
            $Domain1
            ."','".
            $Price1
            ."','".
            $Detail1
            ."','".
            $Qty1
            ."','".
            $Price2
            ."','".
            $Detail2
            ."','".
            $Qty2
            ."','".
            $Price3
            ."','".
            $Detail3
            ."','".
            $Qty3
            ."','".
            $Price4
            ."','".
            $Detail4
            ."','".
            $Qty4
            ."','".
            $Price5
            ."','".
            $Detail5
            ."','".
            $Qty5
            ."','".
            $Price6
            ."','".
            $Detail6
            ."','".
            $Qty6
            
            ."')\">".$Domain1."</td>";
			echo "<td onclick=\"ClickSelectBill('".
            $ID
            ."','".
            $Domain1
            ."','".
            $Price1
            ."','".
            $Detail1
            ."','".
            $Qty1
            ."','".
            $Price2
            ."','".
            $Detail2
            ."','".
            $Qty2
            ."','".
            $Price3
            ."','".
            $Detail3
            ."','".
            $Qty3
            ."','".
            $Price4
            ."','".
            $Detail4
            ."','".
            $Qty4
            ."','".
            $Price5
            ."','".
            $Detail5
            ."','".
            $Qty5
            ."','".
            $Price6
            ."','".
            $Detail6
            ."','".
            $Qty6
            
            ."')\" >".$Detail1."</td></b></tr>";
		} 
		echo "</table></div>";
	}
} 

//////////////
$RefID = $_REQUEST['RefID'];
if($RefID!=""){

$sql =" SELECT * FROM ss_billing_transection ";
$sql.=" WHERE BillingNo ";
$sql.=" LIKE '%".$RefID."%' LIMIT 0 , 5 ";
//echo $sql;
$result=$adminlogin->query($sql);
     
    
    if(mysql_num_rows($result)>0){  
		echo "<div><table style='border: 1px solid #999; font-family: verdana; arial, sans-serif; font-size: 13px; padding: 4px; margin: 0 0 5px 0; cursor: default; color: red;' id='search'>";
		while($row = mysql_fetch_array($result)) {
            $ID                  = $row['ID'];
			$Domain1             = $row['Domain1'];
			//
            $Detail1             = $row['Detail1'];
            $Qty1                = $row['Qty1'];
            $Price1              = $row['Price1'];
            //
            $Detail2             = $row['Detail2'];
            $Qty2                = $row['Qty2'];
            $Price2              = $row['Price2'];
            //            
            $Detail3             = $row['Detail3'];
            $Qty3                = $row['Qty3'];
            $Price3              = $row['Price3'];
            //
            $Detail4             = $row['Detail4'];
            $Qty4                = $row['Qty4'];
            $Price4              = $row['Price4'];
            //
            $Detail5             = $row['Detail5'];
            $Qty5                = $row['Qty5'];
            $Price5              = $row['Price5'];
            //            
            $Detail6             = $row['Detail6'];
            $Qty6                = $row['Qty6'];
            $Price6              = $row['Price6'];
            
			//$CustomerAddress     = $row['Address'];
			echo "<tr><b>";
			echo "<td onclick=\"ClickSelectBill('".
            $ID
            ."','".
            $Domain1
            ."','".
            $Price1
            ."','".
            $Detail1
            ."','".
            $Qty1
            ."','".
            $Price2
            ."','".
            $Detail2
            ."','".
            $Qty2
            ."','".
            $Price3
            ."','".
            $Detail3
            ."','".
            $Qty3
            ."','".
            $Price4
            ."','".
            $Detail4
            ."','".
            $Qty4
            ."','".
            $Price5
            ."','".
            $Detail5
            ."','".
            $Qty5
            ."','".
            $Price6
            ."','".
            $Detail6
            ."','".
            $Qty6
            
            ."')\">".stripslashes($ID)."</td>";
            
			echo "<td onclick=\"ClickSelectBill('".
            $ID
            ."','".
            $Domain1
            ."','".
            $Price1
            ."','".
            $Detail1
            ."','".
            $Qty1
            ."','".
            $Price2
            ."','".
            $Detail2
            ."','".
            $Qty2
            ."','".
            $Price3
            ."','".
            $Detail3
            ."','".
            $Qty3
            ."','".
            $Price4
            ."','".
            $Detail4
            ."','".
            $Qty4
            ."','".
            $Price5
            ."','".
            $Detail5
            ."','".
            $Qty5
            ."','".
            $Price6
            ."','".
            $Detail6
            ."','".
            $Qty6
            
            ."')\">".$Domain1."</td>";
			echo "<td onclick=\"ClickSelectBill('".
            $ID
            ."','".
            $Domain1
            ."','".
            $Price1
            ."','".
            $Detail1
            ."','".
            $Qty1
            ."','".
            $Price2
            ."','".
            $Detail2
            ."','".
            $Qty2
            ."','".
            $Price3
            ."','".
            $Detail3
            ."','".
            $Qty3
            ."','".
            $Price4
            ."','".
            $Detail4
            ."','".
            $Qty4
            ."','".
            $Price5
            ."','".
            $Detail5
            ."','".
            $Qty5
            ."','".
            $Price6
            ."','".
            $Detail6
            ."','".
            $Qty6
            
            ."')\" >".$Detail1."</td></b></tr>";
		} 
		echo "</table></div>";
	}
} 

/////////////////   
?>