<?php
    require_once 'connection.php';

        $query ="SELECT * FROM `sostavleniyeshpor`";
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


        $rows = mysqli_num_rows($result); // количество полученных строк

        echo "<div class = 'col-lg-12 col-md-12 col-sm-12'>";
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result);
                echo "<div class = 'bor'>";
                for ($j = 0 ; $j < 3 ; ++$j)
                {
                  switch ($j) {
                    case 0:
                      echo "<h3>$row[$j]</h3><br><hr class = 'HrHigh'>";
                      break;
                    case 1:
                      echo "<h5>$row[$j]</h5><br>";
                      break;
                    case 2:
                      echo "<p>$row[$j]</p><br>";
                    break;
                  }
                }
                echo "</div><br>";
            }
            echo "</div>";


        // очищаем результат
        mysqli_free_result($result);
?>
