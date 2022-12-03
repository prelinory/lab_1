<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel='stylesheet' href="css/main.css">
</head>
<body>
			<form action="change_password.php" method="post">
				<?php if (isset($_SESSION['message']))
				{
					$message = $_SESSION['message'];
					echo $message;
					unset($_SESSION['message']);
				}
				?> <br>
				<h1>Смена пароля</h1><br>
				<input type="password" name="old_pass" placeholder="Введите старый пароль"><br>
				<input type="password" name="pass" placeholder="Введите новый пароль"><br>
				<input type="password" name="pass2" placeholder="Подтвердите пароль"><br>
				<button type="submit">Сменить пароль</button><br>
				<a href="index.php">Вернуться</a>
			</form>
</body>
</html>
