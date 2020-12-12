
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Формы Регистрации и авторизации</title>
  <link rel="stylesheet" href="style/still.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <p class="h5 my-0 me-md-auto fw-normal">Vsevolod and Co</p>
  <nav class="my-2 my-md-0 me-md-3">
    <a class="p-2 text-dark" href="#">Главная</a>
    <a class="p-2 text-dark" href="#">Контакты</a>
  </nav>
  <?php if(isset($_COOKIE["user"])): ?>
  <a class="btn btn-outline-primary" href="/exit.php">Выйти</a>
<?php endif; ?>
</header>
  <body>
    <div class="container mt-4">
      <?php
      if(!isset($_COOKIE["user"])):?>
      <div class="row">
        <div class="col">
          <h1>Форма регистрации</h1>
          <form action="check.php" method="post" >
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
          <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-success" type="submit">Зарегистрировать</button>
        </form>
        </div>
        <div class="col">
          <h1>Форма авторизации</h1>
          <form action="auth.php" method="post" >
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-success" type="submit">Авторизоваться</button>
        </form>
        </div>
      <?php else: ?>
        <div class="col">
          <h1>Форма регистрации</h1>
          <form action="check.php" method="post" >
          <input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
          <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
          <input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
          <button class="btn btn-success" type="submit">Зарегистрировать</button>
        </form>
        <?php endif; ?>
        <?php for ($i = 0; $i < 6; $i++): ?>
        <div class="card-body">
                <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                <ul class="list-unstyled mt-3 mb-4">
                  <li>10 users included</li>
                  <li>2 GB of storage</li>
                  <li>Email support</li>
                  <li>Help center access</li>
                </ul>
              <?php if (!isset($_COOKIE['user'])):?>
                  <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробная информация доступна только зарегстрированным пользователям</button>
                  <?php else: ?>
                  <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
              <?php endif; ?>
              </div>
          <?php endfor; ?>

      </div>
    </div>
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <small class="d-block mb-3 text-muted">© 2017-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Cool stuff</a></li>
          <li><a class="link-secondary" href="#">Random feature</a></li>
          <li><a class="link-secondary" href="#">Team feature</a></li>
          <li><a class="link-secondary" href="#">Stuff for developers</a></li>
          <li><a class="link-secondary" href="#">Another one</a></li>
          <li><a class="link-secondary" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Resource</a></li>
          <li><a class="link-secondary" href="#">Resource name</a></li>
          <li><a class="link-secondary" href="#">Another resource</a></li>
          <li><a class="link-secondary" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="link-secondary" href="#">Team</a></li>
          <li><a class="link-secondary" href="#">Locations</a></li>
          <li><a class="link-secondary" href="#">Privacy</a></li>
          <li><a class="link-secondary" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>
</body>
</html>
