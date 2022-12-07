<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Контакты</title>
  <meta name="description" content="">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
</head>

<body class="body">

  <?php
  include './components/header.php';
  ?>

  <main class="main inner-page">
    <section class="hero">
      <div class="wrapper">
        <div class="container">

          <h1 class="title hgroup">
            <small>Если у Вас есть вопросы звоните</small>
            <a class="title" href="tel:+78422737050">+7 (8422) 73-70-50</a>
            <small>или напишите нам</small>
          </h1>
          <!-- форма обратной связи  -->
          <form action="">

          </form>
        </div>


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
