<?php
	//Connect to DB
    include("../function/condb.php");
	
	//agg query check large than price equal to 50000
	$query = "SELECT hardware_id, model, price, type from hardware where price >= 10000";
	$stmt = $db->prepare($query); //準備執行SQL指令
    $stmt->execute(); //執行SQL指令
    $result = $stmt->fetchAll();
    for($i=0; $i<count($result); $i++){
        echo '<br><br>' .
            "硬体的ID: " . $result [$i]['hardware_id'] . '<br>' .
            "型号: " . $result [$i]['model'] . '<br>' .
            "价格: " . $result [$i]['price'] . '<br>' .
            "类型: " . $result [$i]['type'] . '<br>' .
            '<br>';
    }