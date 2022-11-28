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
</head>

<body class="body">

  <?php include './components/header.php';?>

  <main>

    <?php
    // первый экран главной страницы
    include 'components/first-screen.php';
    // анонсы направлений услуг
    include 'components/services.php';
    // персональный блок с дядькой
    include 'components/personal-card.php';
    // Преимущества 1 вариант (без заголовка)
    include 'components/benefits.php';
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
