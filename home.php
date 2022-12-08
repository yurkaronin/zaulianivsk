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

  <?php
  include './components/header.php';
  ?>

  <main class="main">
    <!-- SEO Заголовок, который хорошо дополняет логическую структуру страницы, но отсутствует в дизайне  -->
    <h1 class="visually-hidden">За УЛЬЯНОВСК! Сайт с подборками инициатив в Ульяновской области</h1>

    <section class="home-screen">
      <div class="wrapper">
        <!-- SEO Заголовок, который хорошо дополняет логическую структуру страницы, но отсутствует в дизайне  -->
        <h2 class="visually-hidden">Новые инициативы</h2>
        <div class="home-screen__grid">
          <div class="home-screen__slider">

            <div class="swiper mySwiper">
              <div class="swiper-wrapper">

                <?php
                  include './components/repeat/home-screen-slide.php';
                  include './components/repeat/home-screen-slide.php';
                  include './components/repeat/home-screen-slide.php'
                ?>

              </div>
            </div>
          </div>

          <div class="home-screen__navigation">
            <div class="swiper-button swiper-button-prev">
              <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.999999 14L12.6364 2L25 14" stroke="white" stroke-width="2" />
              </svg>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button swiper-button-next">
              <svg width="26" height="15" viewBox="0 0 26 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25 1L13.3636 13L0.999999 1" stroke="white" stroke-width="2" />
              </svg>

            </div>
          </div>
        </div>


      </div>
    </section>

    <section class="first-of-all section">
      <div class="wrapper">
        <!-- блок с интерактивной картой  -->
        <div class="map map--transform">
          <div class="map__wrapper">
            <!-- тут будет карта  -->
            <div id="map" class="map__content"></div>
          </div>
        </div>

        <div class="section__top section__top--clear">
          <h2 class="title">Решаем в первую очередь</h2>
          <a href="#" class="button"><span>Все инициативы</span></a>
        </div>


        <ul class="card-list card-list--two list-reset">
          <?php
            include './components/repeat/card-item-long-1.php';
            include './components/repeat/card-item-long-2.php';
            include './components/repeat/card-item-long-1.php';
            include './components/repeat/card-item-long-2.php';
            include './components/repeat/card-item-long-1.php';
            include './components/repeat/card-item-long-2.php';
          ?>
        </ul>

        <a class="button button--mega" href="#"><span>Подать Инициативу</span></a>

      </div>
    </section>

    <section class="news section">
      <div class="wrapper">
        <div class="section__top">
          <h2 class="title">Новости</h2>
          <a href="#" class="button"><span>Все новости</span></a>
        </div>

        <ul class="news__list card-list list-reset">
          <li class="news__item">
            <a href="#">
              <div class="news__image">
                <img src="./img/news/1.jpg" alt="Фото" width="352">
              </div>
              <span class="news__date">24 апреля, 2022</span>
              <h3 class="title">Пример заголовка новости он может быть длинным и идти в несколько строк</h3>
            </a>
          </li>
          <li class="news__item">
            <a href="#">
              <div class="news__image">
                <img src="./img/news/2.jpg" alt="Фото" width="352">
              </div>
              <span class="news__date">24 апреля, 2022</span>
              <h3 class="title">Пример заголовка новости он может быть длинным и идти в несколько строк</h3>
            </a>
          </li>
          <li class="news__item">
            <a href="#">
              <div class="news__image">
                <img src="./img/news/3.jpg" alt="Фото" width="352">
              </div>
              <span class="news__date">24 апреля, 2022</span>
              <h3 class="title">Пример заголовка новости он может быть длинным и идти в несколько строк</h3>
            </a>
          </li>
          <li class="news__item">
            <a href="#">
              <div class="news__image">
                <img src="./img/news/4.jpg" alt="Фото" width="352">
              </div>
              <span class="news__date">24 апреля, 2022</span>
              <h3 class="title">Пример заголовка новости он может быть длинным и идти в несколько строк</h3>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <section class="about section">
      <div class="wrapper">
        <div class="section__top">
          <h2 class="title">Немного о нас</h2>
        </div>

        <div class="about__grid about">
          <div class="about__image">
            <img src="./img/about-us/1.jpg" alt="Фотография" width="608">
          </div>
          <div class="about__details">
            <p class="title">Значительную часть своего свободного времени граждане проводят во дворах и общественных
              пространствах. От того, насколько комфортно гражданам в этих пространствах, зависит их настроение,
              самочувствие, работоспособность.</p>
            <div class="text">
              <p>Современная городская среда должна быть, прежде всего, безопасной, комфортной и разнообразной, поэтому
                создание в этой области благоприятных условий для граждан, повышение удовлетворенности граждан качеством
                городской среды стало одним из приоритетов Партии.</p>
              <p>Данная тема нашла свое выражение в Народной программе Партии. В нее включено обязательство Партии
                активнее вовлекать жителей в решение вопросов местного значения, используя процедуру электронных
                публичных слушаний, а также уделять особое внимание благоустройству дворов.
                программ благоустройства.</p>
            </div>
          </div>
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
