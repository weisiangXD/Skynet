<?php
	//Connect to DB;
	include("../function/condb.php");
	
	//Delete
	$ID = "4";
	
	//SQL command
	$query = ("delete from person where ID = ?");
	$stmt = $db->prepare($query);
	
	//Execute
	$result = $stmt->execute(array($ID));
?>