<?php
	session_start();
	include_once('config.php');
	$sql = "select * from users";
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
	$cout = 12;
	echo "<pre>";
	while($rows = $stmt->fetch(PDO::FETCH_NUM)){
		print_r($rows);
		$saled = password_hash("onche", PASSWORD_BCRYPT, ['cost'=>12]);
		print_r($saled);
		
	}
	
	exit();
?>