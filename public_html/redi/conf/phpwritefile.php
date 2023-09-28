<?php
include 'allconfig.conf';
if (file_exists($iax_trunkFile)) 
{
unlink($iax_trunkFile);
}

$f=fopen($iax_trunkFile, "x+");

//$text="eeeee\n";
//$text=$text."iiiiiii\n";
// adding header 
//$text="\xEF\xBB\xBF".$text;
fputs($f, $text);
fclose($f);

//end write file

?> 