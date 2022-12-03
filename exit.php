<?php
 setcookie('user', $user['login'], time() - (60*60), "/");

 header('Location: /')
?>
