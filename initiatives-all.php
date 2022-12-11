<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Все инициативы</title>
  <meta name="description" content="">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>

</head>

<body class="body">

  <?php
  include './components/header.php';
  ?>

  <main class="main inner-page">

    <?php
    include './components/hero.php';
    ?>

    <section class="tabs" id="js-tabs">
      <div class="wrapper">
        <!-- блок с интерактивной картой  -->
        <div class="map map--transform">
          <div class="map__wrapper">
            <!-- тут будет карта  -->
            <div id="map" class="map__content"></div>
          </div>
        </div>

        <!-- Шапка табов - кнопки  -->
        <div class="tabs__head">
          <ul class="tabs__list">
            <li class="tabs__item">
              <!-- Кнопка таба -->
              <button class="tabs__button">
                <span>Голосование</span>
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13 1L7 7L1 0.999999" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>

              </button>
            </li>
            <li class="tabs__item">
              <!-- Кнопка таба -->
              <button class="tabs__button">
                <span>В работе</span>
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13 1L7 7L1 0.999999" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>
              </button>
            </li>
            <li class="tabs__item">
              <!-- Кнопка таба -->
              <button class="tabs__button">
                <span>завершенные</span>
                <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13 1L7 7L1 0.999999" stroke="white" stroke-width="2" stroke-linecap="round" />
                </svg>
              </button>
            </li>
          </ul>
        </div>
        <!-- Фильтры табов - селекты  -->
        <div class="tabs__filter">
          <div class="tabs__filter-item">
            <span class="tabs__filter-label">Сортировать:</span>
            <div class="tabs__filter-item">

              <figure class="itc-select" id="select-3">
                <button type="button" class="itc-select__toggle" name="Выбор муниципалитета" value=""
                  data-select="toggle" data-index="-1">По большинству голосов</button>


                <div class="itc-select__dropdown">
                  <ul class="itc-select__options">
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0"><span>Без
                        сортировки</span></li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>По большинству голосов</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Еще как то</span>
                    </li>
                    <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                      <span>Или вот так то</span>
                    </li>
                  </ul>
                </div>
              </figure>
            </div>

          </div>
        </div>

        <!-- Содержимое табов  контентные блоки-->

        <!-- Содержимое таба группа-->
        <div class="tabs__item-content tabContent">
          <!-- Это временный заголовок, его на продакшене НУЖНО удалить!  -->
          <h3 class="title title--tech">Первый блок контента - таб 1</h3>

          <ul class="card-list card-list--two list-reset">

            <li class="card-item-long">
              <div class="card-item-long__left">
                <div class="card-item-long__desc">
                  <div class="tags-with-label">
                    <ul class="tag-list list-reset">
                      <li><a href="#" class="tag-list__link"><span>Барыш</span></a></li>
                      <li><a href="#" class="tag-list__link"><span>Образование</span></a></li>
                    </ul>
                    <p>24 апреля, 2022 <b>до 24 августа, 2023</b></p>
                  </div>
                  <a href="" class="card-item-long__link">
                    <h3 class="title">Пример названия одной из главных инициатив</h3>
                  </a>
                  <p class="text">Значительную часть своего свободного времени граждане проводят во дворах и
                    общественных
                    пространствах. От того, насколько комфортно гражданам в этих пространствах, зависит их настроение,
                    самочувствие, работоспособность.</p>
                </div>
              </div>
              <div class="card-item-long__right">
                <p class="votes-number"><span class="votes-number__text">Количество голосов:</span><span
                    class="votes-number__big">240</span></p>
                <a class="button button--blue" href="#"><span>Проголосовать</span></a>
              </div>
            </li>

            <li class="card-item-long">
              <div class="card-item-long__left">
                <div class="card-item-long__image">
                  <img src="./img/card-item/1.jpg" alt="фото" width="336">
                </div>
                <div class="card-item-long__desc">
                  <div class="tags-with-label">
                    <ul class="tag-list list-reset">
                      <li><a href="#" class="tag-list__link"><span>Барыш</span></a></li>
                      <li><a href="#" class="tag-list__link"><span>Образование</span></a></li>
                    </ul>
                    <p>24 апреля, 2022 <b>до 24 августа, 2023</b></p>
                  </div>
                  <a href="" class="card-item-long__link">
                    <h3 class="title">Пример названия одной из главных инициатив</h3>
                  </a>
                  <p class="text">Значительную часть своего свободного времени граждане проводят во дворах и
                    общественных
                    пространствах. От того, насколько комфортно гражданам в этих пространствах, зависит их настроение,
                    самочувствие, работоспособность.</p>
                </div>
              </div>
              <div class="card-item-long__right">
                <p class="votes-number"><span class="votes-number__text">Количество голосов:</span><span
                    class="votes-number__big">12 240</span></p>
                <a class="button button--blue" href="#"><span>Проголосовать</span></a>
              </div>
            </li>
          </ul>
        </div>

        <!-- Содержимое таба группа-->
        <div class="tabs__item-content tabContent">
          <!-- Это временный заголовок, его на продакшене НУЖНО удалить!  -->
          <h3 class="title title--tech">Второй блок контента - таб 2</h3>

          <ul class="card-list card-list--two list-reset">
           <li class="card-item-long">
              <div class="card-item-long__left">
                <div class="card-item-long__desc">
                  <div class="tags-with-label">
                    <ul class="tag-list list-reset">
                      <li><a href="#" class="tag-list__link"><span>Барыш</span></a></li>
                      <li><a href="#" class="tag-list__link"><span>Образование</span></a></li>
                    </ul>
                    <p>24 апреля, 2022 <b>до 24 августа, 2023</b></p>
                  </div>
                  <a href="" class="card-item-long__link">
                    <h3 class="title">Пример названия одной из главных инициатив</h3>
                  </a>
                  <p class="text">Значительную часть своего свободного времени граждане проводят во дворах и
                    общественных
                    пространствах. От того, насколько комфортно гражданам в этих пространствах, зависит их настроение,
                    самочувствие, работоспособность.</p>
                </div>
              </div>
              <div class="card-item-long__right">
                <p class="votes-number"><span class="votes-number__text">Количество голосов:</span><span
                    class="votes-number__big">980</span></p>
                <a class="button button--blue" href="#"><span>Проголосовать</span></a>
              </div>
            </li>

            <li class="card-item-long">
              <div class="card-item-long__left">
                <div class="card-item-long__image">
                  <img src="./img/card-item/1.jpg" alt="фото" width="336">
                </div>
                <div class="card-item-long__desc">
                  <div class="tags-with-label">
                    <ul class="tag-list list-reset">
                      <li><a href="#" class="tag-list__link"><span>Барыш</span></a></li>
                      <li><a href="#" class="tag-list__link"><span>Образование</span></a></li>
                    </ul>
                    <p>24 апреля, 2022 <b>до 24 августа, 2023</b></p>
                  </div>
                  <a href="" class="card-item-long__link">
                    <h3 class="title">Пример названия одной из главных инициатив</h3>
                  </a>
                  <p class="text">Значительную часть своего свободного времени граждане проводят во дворах и
                    общественных
                    пространствах. От того, насколько комфортно гражданам в этих пространствах, зависит их настроение,
                    самочувствие, работоспособность.</p>
                </div>
              </div>
              <div class="card-item-long__right">
                <p class="votes-number"><span class="votes-number__text">Количество голосов:</span><span
                    class="votes-number__big">12 240</span></p>
                <a class="button button--blue" href="#"><span>Проголосовать</span></a>
              </div>
            </li>
          </ul>
        </div>

        <!-- Содержимое таба группа-->
        <div class="tabs__item-content tabContent">
          <!-- Это временный заголовок, его на продакшене НУЖНО удалить!  -->
          <h3 class="title title--tech">Третий блок контента - таб 3</h3>
          <ul class="card-list card-list--two list-reset">
          <li class="card-item-long">
              <div class="card-item-long__left">
                <div class="card-item-long__desc">
                  <div class="tags-with-label">
                    <ul class="tag-list list-reset">
                      <li><a href="#" class="tag-list__link"><span>Барыш</span></a></li>
                      <li><a href="#" class="tag-list__link"><span>Образование</span></a></li>
                    </ul>
                    <p>24 апреля, 2022 <b>до 24 августа, 2023</b></p>
                  </div>
                  <a href="" class="card-item-long__link">
                    <h3 class="title">Пример названия одной из главных инициатив</h3>
                  </a>
                  <p class="text">Значительную часть своего свободного времени граждане проводят во дворах и
                    общественных
                    пространствах. От того, насколько комфортно гражданам в этих пространствах, зависит их настроение,
                    самочувствие, работоспособность.</p>
                </div>
              </div>
              <div class="card-item-long__right">
                <p class="votes-number"><span class="votes-number__text">Количество голосов:</span><span
                    class="votes-number__big">11 420</span></p>
                <a class="button button--blue" href="#"><span>Проголосовать</span></a>
              </div>
            </li>

            <li class="card-item-long">
              <div class="card-item-long__left">
                <div class="card-item-long__image">
                  <img src="./img/card-item/1.jpg" alt="фото" width="336">
                </div>
                <div class="card-item-long__desc">
                  <div class="tags-with-label">
                    <ul class="tag-list list-reset">
                      <li><a href="#" class="tag-list__link"><span>Барыш</span></a></li>
                      <li><a href="#" class="tag-list__link"><span>Образование</span></a></li>
                    </ul>
                    <p>24 апреля, 2022 <b>до 24 августа, 2023</b></p>
                  </div>
                  <a href="" class="card-item-long__link">
                    <h3 class="title">Пример названия одной из главных инициатив</h3>
                  </a>
                  <p class="text">Значительную часть своего свободного времени граждане проводят во дворах и
                    общественных
                    пространствах. От того, насколько комфортно гражданам в этих пространствах, зависит их настроение,
                    самочувствие, работоспособность.</p>
                </div>
              </div>
              <div class="card-item-long__right">
                <p class="votes-number"><span class="votes-number__text">Количество голосов:</span><span
                    class="votes-number__big">12 240</span></p>
                <a class="button button--blue" href="#"><span>Проголосовать</span></a>
              </div>
            </li>
          </ul>
        </div>

        <!-- мега кнопка  -->
        <a class="button button--more" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="9" fill="none">
            <path stroke="#0770DC" stroke-linecap="round" stroke-width="2" d="M13 1 7 7 1 1" />
          </svg>
          <span>Показать еще</span>
        </a>
        <!-- пагинация  -->
        <div class="pagination">
          <ul class="pagination__list">
            <li class="pagination__item">
              <a class="pagination__link pagination__link--prev pagination__link--text" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="14" fill="none">
                  <path stroke="#0770DC" stroke-linecap="round" stroke-width="2" d="M8 13 2 7l6-6" />
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
                  <path stroke="#0770DC" stroke-linecap="round" stroke-width="2" d="m1 13 6-6-6-6" />
                </svg>
              </a></li>
          </ul>
        </div>
        <!-- мега кнопка  -->
        <a class="button button--mega" href="#"><span>Подать Инициативу</span></a>
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
