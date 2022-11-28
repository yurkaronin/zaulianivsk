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
    <section class="section">
      <div class="wrapper">
        <ul class="list-reset grid-list">
          <li><a href="#" class="button"><span>Ссылка как кнопка</span></a></li>
          <li><button class="button"><span>Кнопка</span></button></li>
        </ul>


      </div>
    </section>


  </main>

  <?php
    // подвал
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'
    ?>
</body>

</html>
