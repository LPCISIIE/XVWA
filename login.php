<?php
	session_start();
	$uname = $_POST['username'];
	$password = $_POST['password'];
	$ActiveUser = '';
	include_once('config.php');
	$sql = "select * from users";
	$stmt = $conn1->prepare($sql);
	$stmt->execute();
	while($rows = $stmt->fetch(PDO::FETCH_NUM)){
		//
		//LE MOT DE PASSE DU COMPTE ADMIN EST : ONCHE
		//
		if(password_verify($password, $rows[2])) {
			$ActiveUser = $rows[1];
		}
	}
	if(!empty($ActiveUser)){
		$_SESSION['user'] = $ActiveUser;
	}
	header("Location: /xvwa/");
	
?>
