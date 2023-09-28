<?

$sid=$_POST['sid'];
$ns1=$_REQUEST['ns1'];
$ns2=$_REQUEST['ns2'];
$ns3=$_REQUEST['ns3'];
$ns4=$_REQUEST['ns4'];
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

                $url = "http://trs-test.thnic.co.th/th-reseller-v1_1/rsl_server.php";
$vars = "mid=113&sid=R4a4yz2fto3zemp&";
                $vars .= "command=update&obj=nsdomain&domainname=";
                $vars .= $domainname."&";
                $vars .= "ns1=".$ns1."&";
		$vars .= "ns2=".$ns2."&";
		$vars .= "ns3=".$ns3."&";
		$vars .= "ns4=".$ns4."&";
		Post($vars,$url);
?>
