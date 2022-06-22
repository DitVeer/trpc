<?php
	session_start();
	require_once 'connect.php';

	$login = $_POST['login'];
	$pass = $_POST['pass'];

	$check_user = mysqli_query($connect,"SELECT * FROM `login` WHERE `login` = '$login' AND `pass` = '$pass'");
	if (mysqli_num_rows($check_user)>0){

		$user = mysqli_fetch_assoc($check_user);
		print_r($user);
		$_SESSION['user'] = [
			"login" => $user['login'],
			"password" => $user['pass']
		];
		header('Location:../purchase.php');
	}
	else{
		$_SESSION['message'] = 'Неправильные даныне';
        header('Location: ../index.php');
	}
?>