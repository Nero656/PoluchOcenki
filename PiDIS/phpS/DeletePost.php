<?php

    $Title = filter_var(trim($_POST['Title']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'mysql', 'mysql', 'poluchenieocenki');

    $mysql -> query("DELETE FROM `sostavleniyeshpor` WHERE `Title` = '$Title'");

    $mysql -> close();

    header('Location: /');
    exit();
?>
