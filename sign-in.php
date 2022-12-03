<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>Форма входа</title>
</head>
<body>
        <form action="enter.php" method="post">
        	<?php if (isset($_SESSION['message']))
			{
				$message = $_SESSION['message'];
				echo $message;
				unset($_SESSION['message']);
			}
        	?><br>
					<h1>Форма входа</h1><br>
			<label>Логин</label>
			<input type="text" name="login" placeholder="Введите логин"><br>
			<label>Пароль</label>
			<input type="password" name="password" placeholder="Введите пароль"><br>
			<button type="submit">Войти</button><br>
			<p>
					Нет аккаунта? - <a href="sign-up.php">Зарегестрироваться</a><br>
			</p>
			<a href="forgot_password_form.php">Забыли пароль?</a>
		</form>
</body>
</html>
