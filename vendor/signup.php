<?php
	session_start();
	require_once 'connect.php';
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	$pass_2 = $_POST['pass2'];
	if($pass === $pass_2){
			mysqli_query($connect,"INSERT INTO `login` (`login`, `pass`) VALUES ('$login', '$pass')");
			$_SESSION['message'] = 'Регистрация прошла успешно';
        	header('Location: ../index.php');
	}
	else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../registr.php');
    }
?>