<?php 
###########################################
# TRS PANEL
# Version 0.1 Beta
# Date : 27/2/2551
# By : PHICHET KHOEIARSA
# Email : phichet@siamsoft.com
# INDEX File
###########################################
$sid=$_REQUEST['sid'];
$action=$_REQUEST['action'];
//echo $sid;
if(1) 
{
//$sid=$_GET['sid'];
//echo "sid is ..".$sid;

    $myFile = "/home/siamsoft/public_html/thnic/temper";
//                        $fh = fopen($myFile, 'w') or die("can't open file");
  //                      fwrite($fh, $sid);
   //                     fclose($fh);

}
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



if(isset($_POST['sid']))
{
    $myFile = "/home/siamsoft/public_html/thnic/temper";
                        //$fh = fopen($myFile, 'w') or die("can't open file");
                        //fwrite($fh, $sid);
                        //fclose($fh);

}
else
{
   
		switch($action) {
	//	default:
		case "login":
		$url = "http://trs-test.thnic.co.th/th-reseller-beta/rsl_server.php";
		$vars = "action=submitted&mid=113&command=login&pw=D5X79q9tx7";
		Post($vars,$url);
			$myFile = "/home/siamsoft/public_html/thnic/temper";
			$fh = fopen($myFile, 'w') or die("can't open file");
			
			fwrite($fh, $sid);
			
			fclose($fh);
			break;
		case "logout":
		$url = "http://trs-test.thnic.co.th/th-reseller-beta/rsl_server.php";
		$vars = "action=submitted&mid=113&command=logout&pw=D5X79q9tx7";
		Post($vars,$url);
			break;
						} 
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
