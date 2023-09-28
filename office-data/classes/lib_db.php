<?
/*
+--------------------------------------------------------------------------
|   WASO Account System v0.1 Class File
|   ========================================
|   by Phichet Khoeiarsa
|   (c) 2002 - 2010 Siamsoft
|   http://www.siamsoft.com
|   ========================================
|   Web: http://www.siamsoft.com
|   Email: vasu@siamsoft.com
+---------------------------------------------------------------------------
|   > Example Class Loader File
|   > Module written by Phichet Khoeiarsa
|   > Date started: 9/1/2553
|
+--------------------------------------------------------------------------
*/

class db { // Database Class
var $link;
var $num_row;

	// Function Connect database server
   function db() { 
	   global $db_server,$db_name,$db_user,$db_password;
       $this->link = mysql_connect($db_server, $db_user, $db_password);
       mysql_select_db($db_name) or die("Error connect db $db_name");
   }

	// Fucntion query sql
  function query($query) {
	  //$charset = "SET NAMES 'tis620'";
	   //$result = mysql_query($charset) or die('Invalid query: ' . mysql_error());
       $result = mysql_query($query, $this->link) or die("Error $query");
	   $this->num_row=$result;
       return $result;
   }

	// Fucntion num rows
  function num_row() {
       $result = mysql_num_rows($this->num_row);
       return $result;
   }
/*	function maxv($colname,$tablename) {
		$sql="select MAX($colname) from $tablename";
		$result=$this->query($sql);
		$row=mysql_fetch_array($result);
		return $row['0'];
	}*/
	// Fucntion close database
   function close() {
       mysql_close($this->link);
   }
}
?>