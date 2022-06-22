<?php
	session_start();
	if (!$_SESSION['user']) {
		header('Location:/');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssfiles/purchase.css">
	<title>Main</title>
</head>
<body>
	<nav class="main">
		<div>
			<a class="photo" href="profile.php"><img src="reviews-user-photo.jpg" width="100px" height="100px"></a><br>
		</div>
		<div class="log">
		<button><a href="profile.php">Перейти к профилю</a></button>
		<button><a href="information.php" action="vendor/purchin1.php">Информация</a></button>
		</div>
	</nav>
	
	<div class="purch">


		<form class="form" action="vendor/purchin.php" method="post">
			<datalist id="city_name">
			<option value="Москва">
			<option value="Санкт-Петербург">
			</datalist>
			<h1>Выберите билет</h1>
			<div class="first">
				<div class="first1">
		<label>Город отправления</label>
		<input type="text" name="city_1" list="city_name">
		</div>
		<div class="first2">
		<label>Город прибытия</label>
		<input type="text" name="city_2" list="city_name">
		</div>
		</div>
		<div class="second">
		<label>Дата отправления</label>
		<input type="date" name="date">
		</div>
		<button class="but" type="submit">Найти билет</button>
		
		<?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
	</form>


	</div>
</body>
</html>