<!DOCTYPE html>
<html>
<head>
  <title>Органайзер: <?=$title?></title>
  <link rel="stylesheet" href="/public/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/public/css//fonts/all.min.css" />
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">Задачник</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/task/create">Создать задачу</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/auth/login">Войти</a>
      </li>
    </ul>
  </div>
</nav>
<?=$content?>
</div>
<script src="/public/js/jquery.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2.0.6/dist/umd/popper.min.js"></script>
<script src="/public/js/bootstrap.min.js"></script>
<script src="/public/js/form.js"></script>
<script src="/public/js/fonts/all.min.js"></script>
</body>
</html>