<?php
    $user = 'root';
    $password = 'weisiang233';
    try{
        $db = new PDO('mysql: host=localhost;dbname=database_hw3; charset=utf8', $user, $password);
        //之後若是要結束與資料庫的連綫，則使用 [$db = null;]
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }catch(PDOException $e){ //若上述程序碼出現錯誤，便會執行以下的動作
        Print "ERROR!: " . $e->getMessage();
        die();
    }
?>