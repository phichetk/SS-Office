<?php

$data1 =$_REQUEST['data1']; // % ที่ หัก ณ ที่จ่าย
$data2 =$_REQUEST['data2']; // ยอดเต็ม
$data3 =$_REQUEST['data3']; // % vat
#######################

$datasum = ($data2 - ($data2 * $data1 / 100))+ $data3; 
echo number_format($datasum,2);


?>