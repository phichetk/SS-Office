<?php	
/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? basename($path): "";
 echo $SHOW_FILE_NAME;
/////

	//echo $_REQUEST["exp-date"];

	$Exdate    = explode('-', $_REQUEST["exp-date"]);
	$expMonth  = $Exdate[1];
	$expYear   = $Exdate[0];

	$expYM = $expYear.$expMonth;

    //$expYear = date('y',strtotime($_REQUEST["exp-name"]));	
	echo $expYM;

	$SQL_Exp  =  "SELECT MAX(ExpID)"; 
	$SQL_Exp .=	" FROM  `expend` ";
	$SQL_Exp .=	" WHERE  `ExpID` LIKE  '".$expYM."%'   ";	
    //echo $SQL_Exp;
    $RS_Exp = $adminlogin->query($SQL_Exp);
	$RO_Exp = mysql_fetch_array($RS_Exp);
	if (empty($RO_Exp[0])){
		$ExpLastID = $expYM."001";
	}
	else{
		$ExpLastID = $RO_Exp[0]+1;
	}
	echo "rs=" .$RO_Exp[0];
	echo "rsLast=" .$ExpLastID;


//$date = date_create_from_format('m/Y', $_REQUEST["exp-name"]);
//echo $date->format('m');
   // $expYear = date('y',strtotime($_REQUEST["exp-name"]));	
	//echo $expYear;
?>
    <div role="main" class="ui-content jqm-content">
		<h1 style="background-color:powderblue;">Expense Add EXE</h1>
        <form action="main.php" method="post" enctype="multipart/form-data"> 
            <input type="hidden" name="myKey" value="expense-added"  />
            
			<label for="textarea">ID:</label>
			<input type="text" name="ID" id="ID" value="<?=$ExpLastID?>" readonly />
            
			<label for="exp-date">วันที่:</label>
            <input type="date" data-clear-btn="false" name="exp-date" id="exp-date" value="<?=$_REQUEST["exp-date"];?>" readonly />
            
            <label for="exp-name">ชื่อ:</label>
            <input type="text" name="exp-name" id="exp-name" value="<?=$_REQUEST["exp-name"];?>" readonly />
            
            <label for="number-pattern">จำนวนเงิน:</label>
            <input type="number" name="number" step="0.01"  id="number" value="<?=$_REQUEST["number"];?>" readonly />
            
            <label for="fileToUpload">File:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" />
            
            <label for="select-choice-1" class="select">Group</label>
            <input type="text" name="select-choice-1" id="select-choice-1" value="<?=$_REQUEST["select-choice-1"];?>" readonly />

            <label for="textarea">Remark:</label>
			<input type="text" name="Remark" id="Remark" value="<?=$_REQUEST["Remark"];?>" readonly />
            <input type="submit" value="Upload Image" name="submit" />
            
        </form> 
	</div>