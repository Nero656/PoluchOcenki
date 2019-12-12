<!DOCTYPE html>
<html lang="ru">
  <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" href="Frame\style\bootstrap.css">
      <style>
        <?php echo file_get_contents("style\style.css"); ?>
    </style>
      <title>База данных</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <button class="navbar-toggler btn btn-outline-light" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
   </button>
    <a class="navbar-brand" style="margin-top: -5px;" href="index.php">Главная</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
      <form method="post" class = "col-lg-5">
          <div class="input-group mb-2 col-lg-12">
            <input placeholder = "Поиск" name = "Search" class = "form-control" type = "text" aria-describedby="button-addon2">
            <div class="input-group-append">
            <input type="submit" class="btn btn-outline-light" id="button-addon2" name = "SearchB" action="Search.php" value="Поиск">
            </div>
          </div>
      </form>
      <br>
        <?php if($_COOKIE['user'] == ''): ?>
          <form class = "form-inline col-lg-2 col-md-6 col-sm-6">
          <div class="btn-group RegSig" role="group" aria-label="Basic example">
            <button type = "button"  class = "btn RegBut" data-toggle="modal" data-target="#Reg">Регистрация</button>
            <button type = "button"  class = "btn RegBut" data-toggle="modal" data-target="#Auth">Войти</button>
          </div>
        <?php else:?>
          <form class="form-inline col-lg-4 col-md-2 col-2">
          <div class="btn-group RegSig" role="group" aria-label="First group">
            <h3 class = "UserName "><?echo $_COOKIE['user']?></h3>
          </div>
            <div class="btn-group RegSig col-lg-2 col-md-2 col-2" role="group" aria-label="Second  group">
                <button type = "button"  class = "btn RegBut" data-toggle="modal" data-target="#Add">Добавить</button>
                <button type = "button"  class = "btn RegBut" data-toggle="modal" data-target="#Delete">Удалить</button>
                <button type = "button"  class = "btn RegBut"><a class = "But" href = "phpS/exit.php">Выход</a></button>
           </div>
        <?php endif;?>
      </form>
  </div>
</nav>


<main class = "Main col-lg-11 col-md-10 col-sm-10 col-10	">
<?php  include 'phpS/Search.php'?><br>
<?php  include 'phpS/AddOnIndex.php';?>
<?php  include 'phpS/Student.php'  ?>
</main>

<!-- регистрация -->

<div class="modal fade" id="Reg" tabindex="-1" role="dialog" aria-labelledby="modalLabel1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel1">Регистрация</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
          <form name = "Form1" action="phpS/Reg.php" method="post">
              <label>Имя:</label>
              <input class="form-control" placeholder = "Имя" name = "Name"  method="Reg.php" required type = "text"><br>
              <label>Фамилия:</label>
              <input class="form-control "  placeholder = "Фамилия" name = "Surname"  method="Reg.php" required type = "text"><br>
              <label>Отчество:</label>
              <input class="form-control "  placeholder = "Отчество" name = "Otchestvo"  method="Reg.php" required type = "text"><br>
              <label>Логин:</label>
              <input class="form-control "  placeholder = "Логин" name = "Login"  method="Reg.php" required type = "text"><br>
              <label>Email адрес:</label>
              <input class="form-control "  placeholder = "Email" name = "Email"  method="Reg.php" required type = "text">
              <small class="form-text text-muted">Мы никогда не передадим вашу электронную почту кому-либо еще.</small><br>
              <label>Пароль:</label>
              <input class="form-control "  placeholder = "Пароль" name = "Password" method="Reg.php" required type = "password">
              <small class="form-text text-muted">Никому не говорите свой пароль.</small><br>
              <div class="modal-footer">
              <button type="submit" name="RegBtn" class="btn RegBut"> Зарегистрироваться</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Вход -->
<div class="modal fade Auth" id="Auth" tabindex="1" role="dialog" aria-labelledby="AuthModel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Вход</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class = "container-fluid ">
            <form name = "Form1" action="phpS/auth.php" method="post" class = "container-fluid  ">
              <label for="recipient-name" class="col-form-label">Логин:</label>
              <input placeholder = "Логин" name = "Login" class = "form-control" method="Reg.php" class="btn btn-outline-light" type = "text">
              <label for="recipient-name" class="col-form-label">Пароль:</label>
              <input placeholder = "Пароль" name = "Password" class = "form-control" type = "password"><br>
          </div>
          <div class="modal-footer">
            <input type="submit" name="submit" class = "btn RegBut" value="Войти">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Добавить -->

<div class="modal fade add" id = "Add" tabindex="1" role="dialog" aria-labelledby="AddModel" aria-hidden = "true">
  <div class="modal-dialog" role = "document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добавить</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="phpS/add.php"  method="post"  class = "container-fluid">
            <input type="text" name="Title" placeholder="Оглавление" class="form-control">
            <input type="text" name="Author" placeholder="Автор" class="form-control">
            <textarea  type="text" name="Text" class="form-control"></textarea>
        </div>
        <div class="modal-footer">
            <input type="submit" name="AddSubmit" class = "btn RegBut" value="Добавить">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Удалить -->

<div class="modal fade add" id = "Delete" tabindex="1" role="dialog" aria-labelledby="AddModel" aria-hidden = "true">
  <div class="modal-dialog" role = "document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удалить</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <form action="phpS/DeletePost.php"  method="post"  class = "container-fluid">
            <input type="text" name="Title" placeholder="Удалить" class="form-control">
        </div><br>
        <div class="modal-footer">
            <input type="submit" name="AddSubmit" class = "btn RegBut" value="Удалить">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
