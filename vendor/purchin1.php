<?php
	session_start();
	require_once 'connect.php';
	$_SESSION['key'] = 'purch';
	header('Location:../information.php')
?>