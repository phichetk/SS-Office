<?

$sid=$_POST['sid'];

$domainname=$_REQUEST['domainname'];

function Post($vars,$url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POST,1);
        #curl_setopt($ch,CURLOPT_UPLOAD,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$vars);
        curl_exec($ch);
        curl_close($ch);
}


               // switch($action) {
               // default:
               // case "login":
                $url = "http://trs-test.thnic.co.th/th-reseller-v1_1/rsl_server.php";
                $vars = "mid=113&sid=Hj2D3aTae69g264&command=info&obj=nsdomain&domainname=".$domainname;
                Post($vars,$url);
                       // echo $sid;
                   //     $myFile = "/home/siamsoft/public_html/thnic/temper";
                   //     $fh = fopen($myFile, 'w') or die("can't open file");

                     //   fwrite($fh, $sid);

                     //   fclose($fh);
                     //   break;
                //case "logout":
                //$url = "http://trs-test.thnic.co.th/th-reseller-v1_1/rsl_server.php";
                //$vars = "action=submitted&mid=113&command=logout&pw=D5X79q9tx7";
                //Post($vars,$url);
                //        break;
?>
