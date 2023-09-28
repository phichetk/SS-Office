<?
/*
1/8/2553
*/

class odbc_db { // Database Class
var $link;
var $num_row;

	// Function Connect database server
   function odbc_db_connect() { 
       $this->link = odbc_connect("DB_WTAX","","");
   }

	// Fucntion query sql
  function odcb_db_query($query) {
		$rs=odbc_exec($this->link,$query);
		//$result = mysql_query($query, $this->link) or die("Error $query");
	   //$this->num_row=$result;
        return $result;
   }

	// Fucntion num rows
  function odbc_num_row() {
       $result = odbc_num_rows ($this->num_row);
       return $result;
   }

	// Fucntion close database
   function odbc_db_close() {
	   odbc_close($this->link);
   }
}
?>