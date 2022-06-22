<?php
session_start();
require_once 'connect.php';
$city_1 = $_SESSION['city_1'];
$city_2 = $_SESSION['city_2'];
$cost = $_SESSION['cost'];
$date = $_SESSION['date'];
$user_id = $_SESSION['user']['login'];
$val = $_POST['radio'];
mysqli_query($connect,"INSERT INTO `history` (`user_id`, `city_1`,`city_2`,`cost`,`date`,`num`) VALUES ('$user_id', '$city_1','$city_2','$cost','$date','$val')");
			$_SESSION['message'] = 'Покупка совершена';
			$_SESSION['temp'] = $val;
header('Location:../profile.php');
?>