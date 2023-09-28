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
|   Email: phichet@siamsoft.com
+---------------------------------------------------------------------------
|   > Example Class Loader File
|   > Module written by Phichet Khoeiarsa
|   > Date started: 9/1/2553
|
+--------------------------------------------------------------------------
*/

class adminlogin { // Database Class

//check user
  function checkuser($username,$password){
  $sql="SELECT COUNT(*) FROM ws_user where UserName='".trim($username)."'";
  $result=$this->query($sql);
  $num=mysql_result($result,0);

		if(!$num){
			$adminlogin_return = "no";
		}else{
			$sql="SELECT * FROM ws_user where UserName='".trim($username)."'";
			$result=$this->query($sql);
			$rows=mysql_result($result,0,2);

					if(trim($rows)==trim(md5($password))){
						$adminlogin_return = "yes";
						//session_register("user"); 
						$_SESSION['user']=trim($username);
					} else {
						$adminlogin_return = "no";
					}

		 }
	
  return $adminlogin_return;
  mysql_close();
  } //end check user 

	// Fucntion query sql
  function query($query) {
       $result = mysql_query($query) or die("Error query function --> $query");
	   ////$this->num_row=$result;
	   $this->num_row=$result;
	   //print_r($num_row);
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