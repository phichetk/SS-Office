<?php
mysql_connect(HOSTNAME, USERNAME, PASSWORD) or die("Error DB Connect ");
mysql_select_db(DATABASE) or die("Error DB Select ");
mysql_query("SET NAMES TIS620");
?>