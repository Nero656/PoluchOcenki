<?php
  $Login = filter_var(trim($_POST['Login']), FILTER_SANITIZE_STRING);
  $Password = filter_var(trim($_POST['Password']), FILTER_SANITIZE_STRING);

  $Password = md5($Password."jhadfskjlhiowua21");

  $mysql = new mysqli('localhost', 'mysql', 'mysql', 'poluchenieocenki');

  $Result = $mysql->query("SELECT * FROM `student` WHERE `Login`= '$Login' AND `Password` = '$Password'");

  $user = $Result->fetch_assoc();

  if(count($user)==0)
  {
    echo "Пользователь не найден проверьте правильно ли вы написали логин или пароль ";
    exit();
  }

  setcookie('user', $user['Name'], time()+3600*24, "/");

  $mysql -> close();

  header('Location: /');
  exit();
?>
