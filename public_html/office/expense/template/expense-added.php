<?php	

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


print_r($_FILES);

 
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<?
 
    $expYear = date('y',strtotime($_REQUEST["exp-name"]));	
	echo $expYear;

	$SQL_Exp = "INSERT INTO `expend` (
				`ExpID` ,
				`Expdate` ,
				`Detail` ,
				`ExpGroup` ,
				`Amount` ,
				`Remark`
				)
				VALUES (
				'".$_REQUEST["ID"]."', 
				'".$_REQUEST["exp-date"]."',  
				'".$_REQUEST["exp-name"]."',
				'".$_REQUEST["select-choice-1"]."',  
				'".$_REQUEST["number"]."',  
				'".$_REQUEST["Remark"]."'
				); 
			    ";
            $RS_Exp = $adminlogin->query($SQL_Exp);

?>

    <div role="main" class="ui-content jqm-content">

		<h1>Expense Added</h1>
		<h1><?=$_REQUEST["ID"]?></h1>
	</div>