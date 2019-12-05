<?php
  $Name = filter_var(trim($_POST['Name']), FILTER_SANITIZE_STRING);
  $Surname = filter_var(trim($_POST['Surname']), FILTER_SANITIZE_STRING);
  $Otchestvo = filter_var(trim($_POST['Otchestvo']), FILTER_SANITIZE_STRING);
  $Login = filter_var(trim($_POST['Login']), FILTER_SANITIZE_STRING);
  $Email = filter_var(trim($_POST['Email']), FILTER_SANITIZE_STRING);
  $Password = filter_var(trim($_POST['Password']), FILTER_SANITIZE_STRING);

  $Rating = rand(1,5);
  $Password = md5($Password."jhadfskjlhiowua21");

  $mysql = new mysqli('localhost', 'mysql', 'mysql', 'poluchenieocenki');
  $mysql -> query("INSERT INTO `student`(`Surname`,`Name`,`otchestvo`,`Rating`,`Login`,`Email`,`Password`) VALUES('$Surname','$Name','$Otchestvo','$Rating','$Login','$Email','$Password')");
  $mysql -> close();

  header('Location: /');
  exit();
?>
