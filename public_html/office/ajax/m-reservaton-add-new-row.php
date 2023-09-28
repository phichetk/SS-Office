<?php

//$y = $_REQUEST['y'];
$y = 11;
if($y!=""){
	$z=$y+1;
			$tmpStr  =" <tr>";
			$tmpStr .="<td><input name='pupil_firstname".$y."' type='text'  size='20' class='borderW_new'  /></td>";
			$tmpStr .="<td><input name='pupil_lastname".$y."' type='text'  size='20' class='borderW_new'  /></td>";
			$tmpStr .="<td><input name='pupil_position".$y."' type='text'  size='20' class='borderW_new'  /></td>";
			$tmpStr .="<td><input name='pupil_phone".$y."' type='text'  size='20' class='borderW_new'  /></td>";
			$tmpStr .="</tr><tr><p id='NextRow2'><input name='pupil_check' id='pupil_check' type='hidden'  value='".$z."' /></p></tr>";

echo $tmpStr;
}
?>