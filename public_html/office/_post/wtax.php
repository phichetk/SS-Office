<?
$mymonth=$_REQUEST['M'];
require("classes/lib_odbc_db.php");
//$odbc_db = new odbc_db();
$sql = "select * from Tax";
//$aaa = odbc_db->odbc_db_connect();

//$bbb = odbc_db->odcb_db_query($sql);

//$ccc= odbc_db->odbc_db_close();




$objConnect = odbc_connect("DB_WTAX","","");

if($objConnect){
	//echo "Database Connected.<br>";
	$sql = "SELECT ";
	$sql .= " Tax.Docno , Tax.Day12";
	$sql .= " , Apcode.Apname  , Apcode.Aptaxno";
	$sql .= "  FROM Tax ";
	$sql .=" INNER JOIN Apcode ON Tax.Apcode = Apcode.Apcode ";
	$sql .= "  WHERE (Month(Day12)=".$mymonth." OR Month(Day13)=".$mymonth." ) AND (Year(Day12)=2010 OR Year(Day13)=2010) ";
	$rs=odbc_exec($objConnect,$sql);
//	$result = odbc_num_rows ($rs);
	echo"<table border=1>";
	while($row = odbc_fetch_array($rs)){
		//$year_day13 = date(Y,$row['Days'])+0;
		//$year_day12 = date("d-",$row['Day12']);
		$year_day12 = date("Y",$row['Day12'])+543;
		$month_day12 = date("m",$row['Day12']);
		$day_day12 = date("j",$row['Day12']);
		echo "<TR><TD>".$row['Docno']." </TD>";
		echo "<TD>".$row['Apname']." </TD>";
		//echo "Day13= ".date('d-m-', $row['Days']).$year_day13." ";
		echo "<TD>Day13= ".$year_day12."-".$month_day12."-".$year_day12." </TD>";
		echo "<TD>".$row['Aptaxno']."</TD></TR>";

		}
	echo"</table>";
	

}else{
	echo "Database Connect Failed.";
}

odbc_close($objConnect);


?>
