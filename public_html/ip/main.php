<?
// db  siamsoft_IP
// user  siamsoft_ipuser
// password  IP@user01
$ip= $_SERVER['REMOTE_ADDR']; 
$username= trim($_REQUEST['username']);
$password= trim($_REQUEST['password']);

//$t = time();
$x = date("Y-m-d H:i:s");
//$xxx = strftime("%B %d, %Y @ %H:%M:%S UTC", $x);

    echo $ip." By ".$username;

    $strFileName = "data/".$username."-ip-data.txt";
    $objFopen = fopen($strFileName, 'w');

    $WriteData  = "\r\nip=".$ip;
    $WriteData  .= "::".$x;
    
    $strUserFileName = "user/".$username.".conf";
    //echo "<br>".$strUserFileName;

    $objUserFopen = fopen($strUserFileName, 'r');
    $passwordFile = trim(fread($objUserFopen,1000));

    fclose($objUserFopen);
    //echo $passwordFile;

    if($password=$passwordFile){
    fwrite($objFopen, $WriteData);

     if($objFopen) {
      echo "<br>File writed.";
     }
     else{
      echo "<br>File can not write";
     }
    }

    fclose($objFopen);
?>
