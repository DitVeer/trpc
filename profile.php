<?php
	session_start();
	require_once 'vendor/connect.php';
	if (!$_SESSION['user']) {
		header('Location:/');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssfiles/profile.css">
	<title>Профиль</title>
</head>
<body>
	<div class="main">
	<div>
	<a class="photo" href="profile.php"><img src="reviews-user-photo.jpg" width="100px" height="100px"></a><br>
	</div>
	<div class="log">
	<button><a href="purchase.php">Перейти к покупке билета</a></button>
	<button><a href="vendor/logout.php">Выйти из профиля</a></button>
	</div>
	</div>
	<?php
			$which_user = $_SESSION['user']['login'];
			$query = "SELECT * FROM `history` WHERE `user_id` LIKE '$which_user'";
			$result = mysqli_query($connect,$query) or die(mysql_error($connect));
			for($data = []; $row = mysqli_fetch_assoc($result);$data[]=$row);
			$result='';
			$summa = 0;
			foreach($data as $elem){
				$result .='<tr>';
				$result .='<td>' .$elem['num'] . '</td>';
				$result .='<td>' .$elem['city_1'] . '</td>';
				$result .='<td>' .$elem['city_2'] . '</td>';
				$result .='<td>' .$elem['cost'] . '</td>';
				$result .='<td>' .$elem['date'] . '</td>';
				$result .='</tr>';
				$summa +=$elem['cost'];
			}
			
		?>
<div class="profile_data">
	<p>Логин: <?= $_SESSION['user']['login'] ?></p>
	<p>E-MAIL: *****</p>
	<p>Телефон: *****</p>
	<p>Пол: ***</p>
	<p class="cost">Суммарная стоимость покупок: <?php echo $summa;?></p>
</div>


<div class="hist">
	<table>
		<tr>
			<th>Номер места</th>
			<th>Город отправления</th>
			<th>Город прибытия</th>
			<th>Стоимость</th>
			<th>Дата</th>
		</tr>
		
	</table>
	<div class="hist-body">
		<table>
			<?php echo $result ?>
		</table>
	</div>
</div>

</body>
</html>