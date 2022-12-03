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
		<?php
			if($_COOKIE['user'] == ''):
		?>
	<?php header("Location: /sign-in.php") ?>

	<?php else:?>
		<form align="center">
			<?php
			if (isset($_SESSION['message']))
			{
			$message = $_SESSION['message'];
			echo $message;
			unset($_SESSION['message']);
			} ?> <br>
		<p> Привет, <?=$_COOKIE['user']?>. </p>
		<p>Чтобы выйти нажмите <a href="/exit.php">сюда</a></p>
		<p> <a href="change_password_form.php">Сменить пароль</a></p>
	<?php endif;?>
		</form>
</body>
</html>
