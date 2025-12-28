<?php
	//Connect to DB;
	include("../function/condb.php");
	
	//ADD
	$ID = "4";
	$person_name = "Limbeh";
	$major = "超人";
	$nationality = "Malaysia";
	
	//SQL command
	$query = ("insert into person values(?,?,?,?)");
	$stmt = $db->prepare($query);
	
	//Execute
	$result = $stmt->execute(array($ID,$person_name,$major,$nationality));
?>