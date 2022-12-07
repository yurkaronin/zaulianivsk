<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>ЗаУльяновск</title>
  <meta name="description" content="">
  <!-- favicon css стили -->
  <?php include 'components/styles_include.php'?>

  <style>
  .page-list {
    min-height: 100vh;
    padding-top: 101px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: auto;
  }

  .page-list a {
    font-size: 2em;
  }

  .header {
    background: linear-gradient(277.49deg, rgba(7, 112, 220, 0.8) 0%, rgba(7, 112, 220, 0) 100%), #00163A;
  }
  </style>
</head>

<body class="body">

  <!--  шапка сайта -->
  <?php include 'components/header.php'?>
  <main>

    <section class="page-list">
      <div class="wrapper">
        <ul class="list-reset">
          <li><a href="./home.php" target="_blank">Главная</a></li>

          <li><a href="./initiatives-all.php" target="_blank">Все инициативы</a></li>
          <li><a href="./initiatives-example.php" target="_blank">Пример названия одной из инициатив</a></li>

          <li><a href="./send-request.php" target="_blank">Подача заявки</a></li>

          <li><a href="./all-news.php" target="_blank">Все новости</a></li>
          <li><a href="./news-item.php" target="_blank">Отдельная новость</a></li>

          <li><a href="./contacts.php" target="_blank">Контакты</a></li>

        </ul>
      </div>
    </section>
  </main>
  <!--  подвал сайта -->
  <?php
    include 'components/footer.php';
    // JS библиотеки и прочие зависимости
    include 'components/scripts_include.php'?>
</body>

</html>
