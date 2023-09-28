<?php
echo "ttt";
$iax_trunkFile = "/home/siamsoft/public_html/get/log.txt";
//$iax_trunkFile = "/var/www/html/get";
if (file_exists($iax_trunkFile)) 
/*
{
unlink($iax_trunkFile);
}
*/
$text = getenv ("REMOTE_ADDR");
$text = $text."||".getenv ("HTTP_USER_AGENT");
$text = $text."\n";
$f=fopen($iax_trunkFile, "wr");

//$text="eeeee\n";
//$text=$text."iiiiiii\n";
// adding header 
//$text="\xEF\xBB\xBF".$text;
fputs($f, $text);

fclose($f);


?>
