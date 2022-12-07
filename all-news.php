<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Все новости</title>
  <meta name="description" content="">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
</head>

<body class="body">

  <?php
  include './components/header.php';
  ?>

  <main class="main inner-page">
    <section class="hero hero--min">
      <div class="wrapper">
        <h1 class="title">Новости</h1>
      </div>
    </section>

    <section class="content">
      <div class="wrapper">
        <ul class="article-list">
          <li>
            <article class="article-review">
              <a class="article-review__link" href="#">
                <div class="article-review__grid">
                  <div class="article-review__image">
                    <img src="./img/news/1.jpg" alt="фотография новости">
                  </div>
                  <div class="article-review__description">
                    <div class="article-review__date">24 апреля, 2022</div>
                    <div class="article-review__title">Пример заголовка новости он может быть длинным и идти в несколько
                      строк</div>
                    <div class="article-review__text">Значительную часть своего свободного времени граждане проводят во
                      дворах и общественных пространствах. От того, насколько комфортно гражданам в этих пространствах,
                      зависит их настроение, самочувствие, работоспособность.</div>
                  </div>
                </div>
              </a>
            </article>
          </li>

          <li>
            <article class="article-review">
              <a class="article-review__link" href="#">
                <div class="article-review__grid">
                  <div class="article-review__image">
                    <img src="./img/news/2.jpg" alt="фотография новости">
                  </div>
                  <div class="article-review__description">
                    <div class="article-review__date">24 апреля, 2022</div>
                    <div class="article-review__title">Пример заголовка новости он может быть длинным и идти в несколько
                      строк</div>
                    <div class="article-review__text">Значительную часть своего свободного времени граждане проводят во
                      дворах и общественных пространствах. От того, насколько комфортно гражданам в этих пространствах,
                      зависит их настроение, самочувствие, работоспособность.</div>
                  </div>
                </div>
              </a>
            </article>
          </li>

          <li>
            <article class="article-review">
              <a class="article-review__link" href="#">
                <div class="article-review__grid">
                  <div class="article-review__image">
                    <img src="./img/news/3.jpg" alt="фотография новости">
                  </div>
                  <div class="article-review__description">
                    <div class="article-review__date">24 апреля, 2022</div>
                    <div class="article-review__title">Пример заголовка новости он может быть длинным и идти в несколько
                      строк</div>
                    <div class="article-review__text">Значительную часть своего свободного времени граждане проводят во
                      дворах и общественных пространствах. От того, насколько комфортно гражданам в этих пространствах,
                      зависит их настроение, самочувствие, работоспособность.</div>
                  </div>
                </div>
              </a>
            </article>
          </li>

          <li>
            <article class="article-review">
              <a class="article-review__link" href="#">
                <div class="article-review__grid">
                  <div class="article-review__image">
                    <img src="./img/news/4.jpg" alt="фотография новости">
                  </div>
                  <div class="article-review__description">
                    <div class="article-review__date">24 апреля, 2022</div>
                    <div class="article-review__title">Пример заголовка новости он может быть длинным и идти в несколько
                      строк</div>
                    <div class="article-review__text">Значительную часть своего свободного времени граждане проводят во
                      дворах и общественных пространствах. От того, насколько комфортно гражданам в этих пространствах,
                      зависит их настроение, самочувствие, работоспособность.</div>
                  </div>
                </div>
              </a>
            </article>
          </li>

        </ul>

        <a class="button button--more" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="9" fill="none">
            <path stroke="#0770DC" stroke-linecap="round" stroke-width="2" d="M13 1 7 7 1 1"></path>
          </svg>
          <span>Показать еще</span>
        </a>

        <div class="pagination">
          <ul class="pagination__list">
            <li class="pagination__item">
              <a class="pagination__link pagination__link--prev pagination__link--text" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" fill="none">
                  <path stroke="#0770DC" stroke-linecap="round" stroke-width="2" d="M8 13 2 7l6-6"></path>
                </svg>
                <span>Предыдущая</span></a>
            </li>

            <li class="pagination__item"><a class="pagination__link" href="#">1</a></li>
            <li class="pagination__item"><a class="pagination__link active" href="#">2</a></li>
            <li class="pagination__item"><a class="pagination__link" href="#">3</a></li>
            <li class="pagination__item pagination__item--768"><a class="pagination__link" href="#">4</a></li>
            <li class="pagination__item pagination__item--1440"><a class="pagination__link" href="#">5</a></li>
            <li class="pagination__item pagination__item--1440"><a class="pagination__link" href="#">6</a></li>
            <li class="pagination__item"><a class="pagination__link pagination__link--dotted" href="#">...</a></li>
            <li class="pagination__item"><a class="pagination__link" href="#">12</a></li>
            <li class="pagination__item"><a class="pagination__link pagination__link--next pagination__link--text"
                href="#">
                <span>Следующая</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" fill="none">
                  <path stroke="#0770DC" stroke-linecap="round" stroke-width="2" d="m1 13 6-6-6-6"></path>
                </svg>
              </a></li>
          </ul>
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
