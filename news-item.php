<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Пример страницы Новость</title>
  <meta name="description" content="">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
</head>

<body class="body">

  <?php
  include './components/header.php';
  ?>

  <main class="main inner-page">
    <section class="hero hero--mod">
      <div class="wrapper">
        <div class="date">24 апреля, 2022</div>
        <!-- заголовок  -->
        <h1 class="title">Пример заголовка новости он может быть длинным и идти в несколько строк</h1>

      </div>
    </section>

    <section class="content content--article">
      <div class="wrapper">
        <div class="container">
          <div class="content__photo">
            <img src="./img/photo/2.jpg">
          </div>

          <div class="content__text">
            <p>Значительную часть своего свободного времени граждане проводят во дворах и общественных пространствах. От
              того, насколько комфортно гражданам в этих пространствах, зависит их настроение, самочувствие,
              работоспособность.</p>

            <p>Современная городская среда должна быть, прежде всего, безопасной, комфортной и разнообразной, поэтому
              создание в этой области благоприятных условий для граждан, повышение удовлетворенности граждан качеством
              городской среды стало одним из приоритетов Партии.</p>

            <p>Данная тема нашла свое выражение в Народной программе Партии. В нее включено обязательство Партии
              активнее вовлекать жителей в решение вопросов местного значения, используя процедуру электронных публичных
              слушаний, а также уделять особое внимание благоустройству дворов.</p>

            <p>Проект «Городская среда» направлен на обеспечение широкого общественного участия в ходе благоустройства
              дворовых и общественных территорий в городах и населенных пунктах с численностью проживания населения
              более тысячи человек, на обеспечение общественного контроля на каждом этапе реализации программ
              благоустройства.</p>
          </div>


        </div>
      </div>
    </section>

    <section class="content__footer">
      <div class="wrapper">
        <div class="container">
          <a href="#" class="button button--icon button--left">
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" fill="none">
              <path stroke="#0770DC" stroke-linecap="round" stroke-width="2" d="m7.5 13-6-6 6-6" />
            </svg>
            <span>Назад к списку</span>
          </a>
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
