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
							//����÷ӧҹ�ͧʤ�Ի����¿ѧ���� exit()
							exit("�������ö�������͡Ѻ MySQL server �� ��سҵ�Ǩ�ͺ������ʵ�, ���ͼ���� ������ʼ�ҹ ��Ҷ١��ͧ�������");
							}
							$dateandtime = date('l dS \of F Y h:i:s A');
							//����� SQL ��������ҧ�ҹ�����Ū��� web
							$sql = "INSERT INTO `siamsoft_siamsoft`.`thnic` (`id` ,`sid` ,`remark`)VALUES (NULL , '".$sid."', '".$dateandtime."');";
							$result = mysql_query($sql);
							if ($result) {
							echo "������ҧ�ҹ���������������<br>";
							}
							else {
							echo "�������ö���ҧ�ҹ��������<br>";
							//�ͧ��������觹�����ʹ٤�͸Ժ�� error ������ѹ�������
							echo "<br>error number = ".mysql_errno($conn)."<br>";
							echo "Error description = ".mysql_error($conn)."</center>";
							//���Ǥ�������Ը���䢵��� �ѹ connect ���������� error ��������ѧ connect ��������
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

