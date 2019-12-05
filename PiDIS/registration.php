<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <!-- <link href="style\style.css" rel="stylesheet"> -->
     <style>
        <?php echo file_get_contents("style\style.css"); ?>
    </style>
    <title>Регистрация</title>
</head>
<body>
    <form name = "Form1" action="Reg.php" method="post">
        <p><input placeholder = "Имя" name = "Name" class = "Doc" method="Reg.php" type = "text"></p>
        <p><input placeholder = "Фамилия" name = "Surname" class = "Doc" method="Reg.php" type = "text"></p>
        <p><input placeholder = "Отчество" name = "Otchestvo" class = "Doc" method="Reg.php" type = "text"></p>
        <p><input placeholder = "Логин" name = "Login" class = "Doc" method="Reg.php" type = "text"></p>
        <p><input placeholder = "Email" name = "Email" class = "Doc" method="Reg.php" type = "text"></p>
        <p><input placeholder = "Пароль" name = "Password" class = "Doc" method="Reg.php" type = "password"></p>
        <input type="submit" name="submit" value="Зарегистрироваться">
    </form>
</body>
</html>
