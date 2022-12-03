<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">
	<title>Форма регистрации</title>
</head>
<body>
  <form action="registration.php" method="post">
            	<?php if (isset($_SESSION['message']))
				{
					$message = $_SESSION['message'];
					echo $message;
					unset($_SESSION['message']);
				}
            	 ?> <br>
  	<h1>Форма регистрации</h1><br>
				<label>Имя</label>
				<input type="text" name="name" placeholder="Введите имя"><br>
				<label>Логин</label>
				<input type="text" name="login" placeholder="Введите логин"><br>
				<label>Пароль</label>
				<input type="password" name="pass" placeholder="Введите пароль"><br>
				<label>Подтверждение пароля</label>
				<input type="password" name="pass2" placeholder="Подтвердите пароль"><br>
				<button type="submit">Зарегистрироваться</button><br>
		  	<p>
				Уже есть аккаунт? - <a href="sign-in.php">Войти</a>
			  </p>
	</form>
</body>
</html>
