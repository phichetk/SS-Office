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
if(0) 
{

    $myFile = "/home/siamsoft/public_html/thnic/temper";
                        $fh = fopen($myFile, 'w') or die("can't open file");
                        fwrite($fh, $sid);
                        fclose($fh);

}
  if (isset($_POST['sid'])){

        $myFile = "/home/siamsoft/public_html/thnic/sid-test.txt";
  	$sid_str = $_POST['sid'];
   	$file = fopen($myFile, "w");
  	fwrite($file, $sid_str);
  	fclose($file);
	}

/*
function Post($vars,$url){

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        #curl_setopt($ch,CURLOPT_UPLOAD,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
        curl_exec($ch);
        curl_close($ch);
}

*/

?>
