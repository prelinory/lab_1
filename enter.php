<?php
	session_start();
	$mysql = mysqli_connect('localhost', 'root', '', 'Us');
	$login = htmlspecialchars($_POST['login'] ?? '');
	$pass = htmlspecialchars($_POST['password'] ?? '');

	$q = "SELECT * FROM `users` WHERE `login` = '$login'";

	$result = mysqli_query($mysql, $q);
	$user = $result->fetch_assoc();
	if(empty($user)) {
		$_SESSION['message'] = 'Такого пользователя нет в системе';
		header('Location: /sign-in.php');
	}
	else {
		$salt = $user['salt'];
		$pass =  crypt($pass, $salt);
	}

	if($pass == $user['password']){
		setcookie('user', $user['login'], time() + (60*60), "/");
		header('Location: /.');
		}
	else {
		$_SESSION['message'] = 'Неверный пароль!';
		header('Location: /sign-in.php');
	}
?>
