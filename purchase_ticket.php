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
	<link rel="stylesheet" type="text/css" href="cssfiles/purchase_ticket.css">
	<title>Выбор места</title>
</head>
<body>
	<nav class="main">
		<div>
			<a class="photo" href="profile.php"><img src="reviews-user-photo.jpg" width="100px" height="100px"></a><br>
		</div>
		<div class="log">
		<button><a href="profile.php">Перейти к профилю</a></button>
		
		</div>
	</nav>
	<div class="purch">


	<form class="form" action="vendor/purchin_ticket.php" method="post">
		<h1>Выберите место:</h1>
		<div class="union">
			<div class="first_row">
				<div class="form_radio_btn">
					<input id="radio-1" type="radio" name="radio" value="1" checked>
					<label for="radio-1">1</label>
				</div>
				 
				<div class="form_radio_btn">
					<input id="radio-2" type="radio" name="radio" value="2">
					<label for="radio-2">2</label>
				</div>
				 
				<div class="form_radio_btn">
					<input id="radio-3" type="radio" name="radio" value="3">
					<label for="radio-3">3</label>
				</div>
				 
				<div class="form_radio_btn">
					<input id="radio-4" type="radio" name="radio" value="4">
					<label for="radio-4">4</label>
				</div>
				<div class="form_radio_btn">
					<input id="radio-5" type="radio" name="radio" value="5">
					<label for="radio-5">5</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-6" type="radio" name="radio" value="6">
					<label for="radio-6">6</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-7" type="radio" name="radio" value="7">
					<label for="radio-7">7</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-8" type="radio" name="radio" value="8">
					<label for="radio-8">8</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-8" type="radio" name="radio" value="9">
					<label for="radio-8">9</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-9" type="radio" name="radio" value="10">
					<label for="radio-9">10</label>
				</div>	
			</div>
			<div class="second_row">
				<div class="form_radio_btn">
					<input id="radio-11" type="radio" name="radio" value="11">
					<label for="radio-11">11</label>
				</div>
				 
				<div class="form_radio_btn">
					<input id="radio-12" type="radio" name="radio" value="12">
					<label for="radio-12">12</label>
				</div>
				 
				<div class="form_radio_btn">
					<input id="radio-13" type="radio" name="radio" value="13">
					<label for="radio-13">13</label>
				</div>
				 
				<div class="form_radio_btn">
					<input id="radio-14" type="radio" name="radio" value="14">
					<label for="radio-14">14</label>
				</div>
				<div class="form_radio_btn">
					<input id="radio-15" type="radio" name="radio" value="15">
					<label for="radio-15">15</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-16" type="radio" name="radio" value="16">
					<label for="radio-16">16</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-17" type="radio" name="radio" value="17">
					<label for="radio-17">17</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-18" type="radio" name="radio" value="18">
					<label for="radio-18">18</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-19" type="radio" name="radio" value="19">
					<label for="radio-19">19</label>
				</div>	
				<div class="form_radio_btn">
					<input id="radio-20" type="radio" name="radio" value="20">
					<label for="radio-20">20</label>
				</div>
			</div>
		</div>
		<div class="butt">
			<button class="but">Купить</button>
		</div>		
	</form>


	</div>
</body>
</html>