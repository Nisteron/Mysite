<?php

$login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

$pass = md5($pass."edgtref124");

$mysql = new mysqli('localhost', 'root', 'root', 'registerbd');

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
$user = $result->fetch_assoc();

if(count($user) == 0){
  echo "Такого пользователья нет";
  exit();
}

setcookie("user", 10, time() +10, "/");

$mysql->close();
header('Location: /');


?>
