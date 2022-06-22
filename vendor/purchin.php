<?php
	session_start();
	require_once 'connect.php';

	$city_1 = $_POST['city_1'];
	$city_2 = $_POST['city_2'];
	$date = $_POST['date'];

	$rand_num = rand(1,100);
        if ($rand_num>20) {
        	$check_ticket = mysqli_query($connect,"SELECT * FROM `costs` WHERE `city_1` = '$city_1' AND `city_2` = '$city_2'");
			if (mysqli_num_rows($check_ticket)>0){
				$price = mysqli_fetch_assoc($check_ticket);
				$_SESSION['message'] = "Билет успешно найден! Стоимость билета: ".'<br>'.$price['cost'].'<br>'.'<button class="but2" type="submit" formaction="purchase_ticket.php">Выбрать место</button>';
				$_SESSION['city_1'] = $city_1;
				$_SESSION['city_2'] = $city_2;
				$_SESSION['date'] = $date;
				$_SESSION['cost'] = $price['cost'];
				
			}
			else{
				$_SESSION['message'] = "Билетов не найдено!";
			}
            
        	header('Location:../purchase.php');
        }
        else{
            $_SESSION['message'] = "Билетов не найдено";
            header('Location:../purchase.php');
        }
?>