<?php
	session_start();
	if (isset($_SESSION['user'])) {
		header('Location:purchase.php');
	}
	$_SESSION['key']=0;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="cssfiles/index.css">
	<title>Вход в систему</title>
</head>
<body>
	<nav class="main">
	<div class="log">
		<button><a href="information.php">Информация</a></button>
	</div>
	</nav>
	<form class="index_form" action="vendor/signin.php" method="post">
		<h1>Вход в систему</h1>
		
		<input type="text" name="login" placeholder="Введите логин" autocomplete="off">
			
		<input type="password" name="pass" placeholder="Введите пароль">
		<button type="submit">Войти</button>
		<p>У вас нет аккаунта? <a href="registr.php">Зарегистрируйтесь</a></p>
		<?php
            if (isset($_SESSION['message'])) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
	</form>
</body>
</html>