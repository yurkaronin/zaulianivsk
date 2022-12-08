<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Пример названия одной из инициатив</title>
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
        <!-- блок с табами и подписью  -->
        <div class="tags-with-label">
          <ul class="tags-with-label__list">
            <li class="tags-with-label__item"><a href="#" class="tags-with-label__link"><span>Барыш</span></a></li>
            <li class="tags-with-label__item"><a href="#" class="tags-with-label__link"><span>Образование</span></a>
            </li>
          </ul>
          <p class="tags-with-label__text">24 апреля, 2022 <b>до 24 августа, 2023</b></p>
        </div>
        <!-- заголовок  -->
        <h1 class="title title--border">Пример названия одной из инициатив, название может быть длинным</h1>
        <!-- голоса и кнопка  -->
        <div class="voices-button">
          <p class="voices-button__number">Количество голосов: <span>24 123</span></p>
          <ul class="voices-button__buttons">
            <li>
              <a class="button" href="#" data-swiper-parallax="-340"><span>Проголосовать</span></a>
            </li>
          </ul>
        </div>

      </div>
    </section>

    <section class="content content--transform">
      <div class="wrapper">
        <div class="container">
          <div class="content__slider" id="slider-photo">
            <div class="swiper">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <a class="swiper-slide__link" href="./img/photo/1.jpg" data-fancybox="gallery--photo"
                    data-caption="Подпись к фотографии">
                    <img src="./img/photo/1.jpg" width="992" alt="подпись к фотографии">
                  </a>
                </div>

                <div class="swiper-slide">
                  <a class="swiper-slide__link" href="./img/photo/1.jpg" data-fancybox="gallery--photo"
                    data-caption="Подпись к фотографии">
                    <img src="./img/photo/1.jpg" width="992" alt="подпись к фотографии">
                  </a>
                </div>

                <div class="swiper-slide">
                  <a class="swiper-slide__link" href="./img/photo/1.jpg" data-fancybox="gallery--photo"
                    data-caption="Подпись к фотографии">
                    <img src="./img/photo/1.jpg" width="992" alt="подпись к фотографии">
                  </a>
                </div>
              </div>
              <!-- If we need pagination -->
              <div class="swiper-pagination"></div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button swiper-button-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" fill="none">
                  <path stroke="#fff" stroke-linecap="round" stroke-width="2" d="M8 13 2 7l6-6" />
                </svg>
              </div>

              <div class="swiper-button swiper-button-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" fill="none">
                  <path stroke="#fff" stroke-linecap="round" stroke-width="2" d="m1 1 6 6-6 6" />
                </svg>
              </div>
            </div>
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

    <section class="map">
      <div class="wrapper">
        <div class="container">
          <div class="map__wrapper">
            <!-- тут будет карта  -->
            <div id="map" class="map__content"></div>
          </div>
        </div>
      </div>

    </section>
    <section class="content__footer">
      <div class="wrapper">
        <div class="container">
          <a href="#" class="button button--left button--white">
            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" fill="none">
              <path stroke="#ffffff" stroke-linecap="round" stroke-width="2" d="m7.5 13-6-6 6-6" />
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
