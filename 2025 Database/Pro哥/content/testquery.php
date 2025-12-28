<?php
	//Connect to DB;
	$user = 'root';
    $password = 'weisiang233';
    try{
        $db = new PDO('mysql: host=localhost;dbname=hardware_investigation; charset=utf8', $user, $password);
        //之後若是要結束與資料庫的連綫，則使用 [$db = null;]
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }catch(PDOException $e){ //若上述程序碼出現錯誤，便會執行以下的動作
        Print "ERROR!: " . $e->getMessage();
        die();
    }
	
	//query
	$query = "select person.id, person_name, major, nationality, hardware.model, type, price, feedback, manufacturer_name, country from person, hardware, manufacturer where person.id = hardware.hardware_id and hardware.id = manufacturer.hardware_id;";
    $stmt = $db->prepare($query); //準備執行SQL指令
    $stmt->execute(); //執行SQL指令
    $result = $stmt->fetchAll();
    for($i=0; $i<count($result); $i++){
        echo '<br><br>' .
            "ID: " . $result [$i]['id'] . '<br>' .
            "人的名字: " . $result [$i]['person_name'] . '<br>' .
            "专业: " . $result [$i]['major'] . '<br>' .
            "国籍: " . $result [$i]['nationality'] . '<br>' .
            "硬体的型号: " . $result [$i]['model'] . '<br>' .
			"价格: " . $result [$i]['price'] . '<br>' .
			"心得: " . $result [$i]['feedback'] . '<br>' .
            "硬体的类别: " . $result [$i]['type'] . '<br>' .
			"厂商: " . $result [$i]['manufacturer_name'] . '<br>' .
            '<br>';
    }
	
?>