<?php	
/////
 $SHOW_FILE_NAME = (SHOW_FILE_NAME == "Y") ? basename($path): "";
 echo $SHOW_FILE_NAME;
/////
?>
    <div role="main" class="ui-content jqm-content">

		<h1>Expense Add</h1>
        <form action="main.php"> 
            <input type="hidden" name="myKey" value="expense-add-exe" />
            
            <label for="exp-date">วันที่:</label>
            <input type="date" data-clear-btn="false" name="exp-date" id="exp-date" value="" />
            
            <label for="exp-name">ชื่อ:</label>
            <input type="text" name="exp-name" id="exp-name" value="" />
            
            <label for="number-pattern">จำนวนเงิน:</label>
            <input type="number" name="number" step="0.01" id="number-pattern" value="" />
            
           
            <label for="select-choice-1" class="select">Group</label>
			<select name="select-choice-1" id="select-choice-1">
                <option value="0">--</option>
            <?
            $SQL_ExpGroup = "SELECT * FROM expend_group";
            $RESULT_ExpGroup = $adminlogin->query($SQL_ExpGroup);
                while($ROW_ExpGroup= mysql_fetch_array($RESULT_ExpGroup)){
            ?> 
                <option value="<?=$ROW_ExpGroup['ID']?>"><? echo $ROW_ExpGroup['ExpName']; ?></option>
            <?      
                }  
            ?>
			</select>
            <label for="textarea">Remark:</label>
            <textarea cols="40" rows="8" name="Remark" id="Remark"></textarea>
            <input type="submit" value="Submit" />
            
        </form> 
	</div>