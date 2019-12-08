<?php

    $mysql = new mysqli('localhost', 'mysql', 'mysql', 'poluchenieocenki');

    $output = '';

    if (isset($_POST['Search']))
    {
        $Search = $_POST['Search'];
        $Search = preg_replace("[A-Za-zА-Яа-яЁё]","", $Search);


        $Result = $mysql -> query("SELECT * FROM `student` WHERE Name LIKE '$Search'") or die("Ничего не найдено");

        $user = $Result->fetch_assoc();

        if (count($user) == 0) { $output = 'Нет результатов'; }
//        else
//        {
//            while ($row = $user)
//            {
//                $Name = $row['Name'];
//                $Surname = $row['Surname'];
//                $id = $row['id'];
//
//                $output .= "<div>".' '.$Name.' '.$Surname."</div>";
//            }
//        }
    }
    $mysql -> close();
?>