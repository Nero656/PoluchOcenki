<?php

  setcookie('user', $user['Name'], time()*0, "/");
  header('Location: /');

?>
