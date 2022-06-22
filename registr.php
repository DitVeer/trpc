<?php
	session_start();
	if (isset($_SESSION['user'])) {
		header('Location:purchase.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssfiles/reg.css">
	<title>Регистрация</title>
</head>
<body>
	
	<form class="index_form1" action="vendor/signup.php" method="post">
	<h1>Регистрация</h1>	
		<input type="text" name="login" placeholder="Введите логин" autocomplete="off">
		<input type="password" name="pass" placeholder="Введите пароль">
		<input type="password" name="pass2" placeholder="Введите повторно свой пароль">
		<button type="submit">Создать</button>
		<p>У вас уже есть аккаунт? <a href="index.php">Авторизируйтесь</a></p>
		
		<?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
	</form>
</body>
</html>