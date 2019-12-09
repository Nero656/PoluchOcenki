<?php

      $mysql = new mysqli('localhost', 'mysql', 'mysql', 'poluchenieocenki');

          if(isset($_POST['SearchB']))
          {
            $Search = $_POST['Search'];

            $Result = $mysql-> query( "SELECT * FROM `student` WHERE `Name` LIKE '$Search' OR  `Surname` LIKE '$Search'");

            $row = $Result -> fetch_assoc();

            echo "<p>".$row['Name']." ".$row['Surname']."</p>";

            $mysql -> close();
          }
?>
