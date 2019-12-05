<?php
    require_once 'connection.php';

        // подключаемся к серверу
        $link = mysqli_connect($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
       // echo "Я ЖИВОЙ"."<br>";
        // выполняем операции с базой данных

        $query ="SELECT * FROM `Student`";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


        $rows = mysqli_num_rows($result); // количество полученных строк

        echo "<table border='1'><tr><th>Id</th><th>Фамилия</th><th>Имя</th><th>Отчество</th><th>Оценка</th></tr>";
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                for ($j = 0 ; $j < 5 ; ++$j) echo "<td>$row[$j]</td>";
                echo "</tr>";
            }
            echo "</table>";


        // очищаем результат
        mysqli_free_result($result);

        // закрываем подключение
        mysqli_close($link);
