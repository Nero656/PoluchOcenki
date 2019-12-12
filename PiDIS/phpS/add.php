<?php

  $Title = filter_var(trim($_POST['Title']), FILTER_SANITIZE_STRING);
  $Author = filter_var(trim($_POST['Author']), FILTER_SANITIZE_STRING);
  $Text = filter_var(trim($_POST['Text']), FILTER_SANITIZE_STRING);

  $mysql = new mysqli('localhost', 'mysql', 'mysql', 'poluchenieocenki');

  $mysql -> query("INSERT INTO `sostavleniyeshpor`(`Title`,`Author`,`Text`) VALUES('$Title','$Author','$Text')") or die("Ошибка");

  $mysql -> close();
  header('Location: /');
  exit();

?>
