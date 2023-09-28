<?php
$iphone = strpos($_SERVER['HTTP_USER_AGENT'],”iPhone”);
$android = strpos($_SERVER['HTTP_USER_AGENT'],”Android”);
$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],”webOS”);
$ipod = strpos($_SERVER['HTTP_USER_AGENT'],”iPod”);
    if(!$iphone && !$android && !$palmpre && !$ipod) {
     header( 'Location: http://www.siamsoft.com/web' ) ;
    }else{
      		
     header( 'Location: http://www.siamsoft.com/iphone' ) ;
    }
    
?>
