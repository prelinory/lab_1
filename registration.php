<?php
	session_start();
	$login = htmlspecialchars($_POST['login'] ?? '');
	$name = htmlspecialchars($_POST['name'] ?? '');
	$pass = htmlspecialchars($_POST['pass'] ?? '');
	$pass2 = htmlspecialchars($_POST['pass2'] ?? '');

	if (mb_strlen($login) < 3 || mb_strlen($login) > 20) {
		$_SESSION['message'] = "Недопустимая длина логина!";
		header('Location: /sign-up.php');
	}
	else if (mb_strlen($pass) < 8 || mb_strlen($pass) > 20) {
		$_SESSION['message'] = "Недопустимая длина пароля!";
		header('Location: /sign-up.php');
	}
	else if($pass != $pass2)
	{
		$_SESSION['message'] = "Пароли не совпадают!";
		header('Location: /sign-up.php');
	}
	else
	{
	$salt = substr(hash("user512", time()), 10, 10);
	$pass =  crypt($pass, $salt);
	$mysql = mysqli_connect('localhost', 'root', '', 'Us');
	$q = "SELECT * FROM `users` WHERE `login` = '$login'";
	$result = mysqli_query($mysql, $q);
	$user = $result->fetch_assoc();
	if(!empty($user))
	{
		$_SESSION['message'] = 'Такой пользователь уже существует';
		header('Location: /sign-up.php');
	}
	else{
	$q = "INSERT INTO `users`(`id`, `name`, `login`, `password`, `salt`) VALUES (NULL,'$name','$login','$pass','$salt')";
	mysqli_query($mysql, $q);
	mysqli_close($mysql);
	setcookie('user', $_POST['login'], time() + (60*60), "/");
	header('Location: /index.php');
		}
	}
