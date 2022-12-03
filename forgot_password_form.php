<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>Форма смены пароля</title>
</head>
<body>
			<form action="forgot_password.php" method="post">
				<?php if (isset($_SESSION['message']))
				{
					$message = $_SESSION['message'];
					echo $message;
					unset($_SESSION['message']);
				}
				?> <br>
				<h1>Восстановление пароля</h1><br>
	      <input type="text" name="name" placeholder="Введите имя"><br>
				<input type="text" name="login" placeholder="Введите логин"><br>
				<input type="password" name="pass" placeholder="Введите новый пароль"><br>
				<input type="password" name="pass2" placeholder="Подтвердите пароль"><br>
				<button type="submit">Сменить пароль</button><br>
			</form>
</body>
</html>
