<?
// db  siamsoft_IP
// user  siamsoft_ipuser
// password  IP@user01
$ip= $_SERVER['REMOTE_ADDR']; 
//$t = time();
$x = date("Y-m-d H:i:s");
//$xxx = strftime("%B %d, %Y @ %H:%M:%S UTC", $x);

    echo $ip;
    $strFileName = "ip-data.txt";
    $objFopen = fopen($strFileName, 'w');

    $WriteData  = "\r\nip=".$ip;
    $WriteData  .= "::".$x;
    fwrite($objFopen, $WriteData);

    if($objFopen) {
    echo "<br>File writed.";
    }
    else{
    echo "<br>File can not write";
    }
    fclose($objFopen);

?>
