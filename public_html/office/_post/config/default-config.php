<?php
#*********************************
# Database
#*********************************


define('HOSTNAME', "localhost");
define('DATABASE', "waso_db");
define('USERNAME', "root");
define('PASSWORD', "changnoi");

define('FORM_ACTION', "GET"); // GET or POST action

/*
define('HOSTNAME', "localhost");
define('DATABASE', "waso254_db");
define('USERNAME', "waso254_user");
define('PASSWORD', "SiamSoft");

*/
#*********************************
# Payment gateway
#*********************************

define('MERCHAT_ID', "401001023572001");
define('TERMINAL_ID', "70340746");
// No decimal and must be multiplied by 100
//define('MIDDLEWAY_FEE', "390000");
// New price
define('MIDDLEWAY_FEE', "450000");
?>
