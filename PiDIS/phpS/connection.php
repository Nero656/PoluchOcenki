<?php
$host = 'localhost'; // адрес сервера
$database = 'poluchenieocenki'; // имя базы данных process podgotovki
$user = 'mysql'; // имя пользователя
$password = 'mysql'; // пароль

// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
// echo "Я ЖИВОЙ"."<br>";
// выполняем операции с базой данных
