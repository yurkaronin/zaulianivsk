<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ЗаУльяновск: Главная страница</title>
  <meta name="description" content="">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
  <style>
    body {
      background: linear-gradient(277.49deg, rgba(7, 112, 220, 0.8) 0%, rgba(7, 112, 220, 0) 100%), #00163A;
    }
  </style>
</head>

<body class="body">

  <?php
  include './components/header.php';
  ?>

  <main class="main">

    <?php
    // include './components/home-screen.php';
    // include './components/home-map.php';
    include './components/first-of-all.php';
    // include './components/news.php';
    // include './components/about.php';
    ?>




  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'
    ?>

</body>

</html>
