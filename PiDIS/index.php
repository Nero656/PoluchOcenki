<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
<!--<link href="style\style.css" rel="stylesheet" type="text/css">-->
    <style>
        <?php echo file_get_contents("style\style.css"); ?>
    </style>
    <title>База данных</title>
</head>
<body>
    <form name = "Form1" method="post" action="Student.php">
      <?php
      if($_COOKIE['user'] == ''):
      ?>
        <a href = "registration.php">Регистрация</a>
        <a href = "authF.html">Войти</a>
      <?php else:?>
          <p>Привет <?$_COOKIE['user']?> <a href = "exit.php">Выход</a></p>
      <?php endif;?>
        <p>Ввод данных: <input placeholder = "Введите данные" name = "InDoc" class = "Doc" id = "Doc" action="Student.php" type = "text"></p>
    </form>
    <?php
      include 'Student.php'
    ?>
</body>
