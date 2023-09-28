<? 
###########################################
# TRS PANEL
# Version 0.1 Beta
# Date : 27/2/2551
# By : PHICHET KHOEIARSA
# Email : phichet@siamsoft.com
# INDEX File
###########################################
$sid=$_POST['sid'];
$action=$_REQUEST['action'];
//echo $sid;






function Post($vars,$url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        #curl_setopt($ch,CURLOPT_UPLOAD,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
        curl_exec($ch);
        curl_close($ch);
}

//$path = "/tmp/test.txt";
//$url = "http://trs-test.thnic.co.th/th-reseller/rsl_server.php";
//$vars = "action=submitted&mid=113&command=login&pw=changnoi";
 
   
		switch($action) {
		default:
		case "login":
		$url = "http://trs-test.thnic.co.th/th-reseller/rsl_server.php";
		$vars = "mid=113&command=login&pw=QsCCCfdDdDAaWWWrDSA";
		Post($vars,$url);

							$hostname = "localhost";
							$user = "siamsoft_thnic";
							$password = "ChangNoi";
							$link = mysql_connect($hostname, $user, $password);
							if (!$link) {
							//จบการทำงานของสคริปต์ด้วยฟังก์ชั่น exit()
							exit("ไม่สามารถเชื่อมต่อกับ MySQL server ได้ กรุณาตรวจสอบชื่อโฮสต์, ชื่อผู้ใช้ และรหัสผ่าน ว่าถูกต้องหรือไม่");
							}
							$dateandtime = date('l dS \of F Y h:i:s A');
							//คำสั่ง SQL ที่ใช้สร้างฐานข้อมูลชื่อ web
							$sql = "INSERT INTO `siamsoft_siamsoft`.`thnic` (`id` ,`sid` ,`remark`)VALUES (NULL , '".$sid."', '".$dateandtime."');";
							$result = mysql_query($sql);
							if ($result) {
							echo "การสร้างฐานข้อมูลสำเร็จแล้ว<br>";
							}
							else {
							echo "ไม่สามารถสร้างฐานข้อมูลได้<br>";
							//ลองเพิ่มคำสั่งนี้เพื่อดูคำอธิบาย error ซิว่ามันคืออะไร
							echo "<br>error number = ".mysql_errno($conn)."<br>";
							echo "Error description = ".mysql_error($conn)."</center>";
							//แล้วค่อยหาิวิธีแก้ไขต่อไป มัน connect ได้แล้วแต่มี error หรือว่ายัง connect ไม่ได้เลย
							}

							mysql_close($link); 
			
			break;
		case "logout":
		$url = "http://trs-test.thnic.co.th/th-reseller/rsl_server.php";
		$vars = "mid=113&command=logout&pw=QsCCCfdDdDAaWWWrDSA";
		Post($vars,$url);
			break;
						} 

//Post($vars,$url);

//<FORM METHOD=POST ACTION="http://trs-test.thnic.co.th/th-reseller/rsl_server.php">
//<INPUT TYPE="hidden" NAME="mid" Value="113">
//<INPUT TYPE="hidden" NAME="command" Value="login">
//<INPUT TYPE="hidden" NAME="pw" Value="changnoi">
//<INPUT TYPE="submit">
//</FORM>
//*/

//phpinfo();
?>

