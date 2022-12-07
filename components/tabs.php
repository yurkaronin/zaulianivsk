<section class="tabs">
  <div class="wrapper">
    <!-- Шапка табов - кнопки  -->
    <div class="tabs__head">
      <ul class="tabs__list">
        <li class="tabs__item">
          <button class="tabs__button active">
            <span>Голосование</span>
            <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13 1L7 7L1 0.999999" stroke="white" stroke-width="2" stroke-linecap="round" />
            </svg>

          </button>
        </li>
        <li class="tabs__item">
          <button class="tabs__button">
            <span>В работе</span>
            <svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13 1L7 7L1 0.999999" stroke="white" stroke-width="2" stroke-linecap="round" />
            </svg>
          </button>
        </li>
        <li class="tabs__item">
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
            <button type="button" class="itc-select__toggle" name="Выбор муниципалитета" value="" data-select="toggle"
              data-index="-1">По большинству голосов</button>


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

    <!-- Содержимое табов  -->
    <div class="tabs__content">
      <div class="tabs__item-content">
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
      </div>
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
        <li class="pagination__item"><a class="pagination__link pagination__link--next pagination__link--text" href="#">
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
