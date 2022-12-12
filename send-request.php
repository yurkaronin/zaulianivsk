<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Подача заявки на инициативу</title>
  <meta name="description" content="">

  <!-- favicon css стили -->
  <?php include './components/styles_include.php'?>
</head>

<body class="body">

  <?php
  include './components/header.php';
  ?>

  <main class="main">
    <section class="hero hero--send-page">
      <div class="wrapper">

        <div class="container">

          <h1 class="title">Подача заявки на инициативу</h1>
          <!-- форма обратной связи  -->
          <div class="form">
            <form action="">
              <div class="form__grid form__grid--mod">

                <div class="form__item">
                  <!-- селект  -->
                  <figure class="itc-select" id="select-4">
                    <figcaption class="form__label">Выберите муниципалитет:<small>*</small>
                    </figcaption>
                    <button type="button" class="itc-select__toggle" name="Выбор муниципалитета" value
                      data-select="toggle" data-index="-1">Все</button>


                    <div class="itc-select__dropdown">
                      <ul class="itc-select__options">
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Все</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 1</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 2</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 3</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 4</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 5</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 6</span>
                        </li>
                      </ul>
                    </div>
                  </figure>

                </div>

                <div class="form__item">
                  <!-- селект  -->
                  <figure class="itc-select" id="select-5">
                    <figcaption class="form__label">Выберите отрасль:<small>*</small>
                    </figcaption>
                    <button type="button" class="itc-select__toggle" name="Выбор муниципалитета" value
                      data-select="toggle" data-index="-1">Все отрасли</button>


                    <div class="itc-select__dropdown">
                      <ul class="itc-select__options">
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Все отрасли</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 1</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 2</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 3</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 4</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 5</span>
                        </li>
                        <li class="itc-select__option" data-select="option" data-value="Название1" data-index="0">
                          <span>Название 6</span>
                        </li>
                      </ul>
                    </div>
                  </figure>
                </div>

                <div class="form__item">
                  <label class="form__label">Название инициативы:<small>*</small></label>
                  <input class="form__input" type="text" name="initiative" placeholder="Введите название инициативы">
                </div>

                <div class="form__item">
                  <label class="form__label">Описание инициативы:<small>*</small></label>
                  <textarea class="form__input" name="message" cols="30" rows="10"
                    placeholder="Опишите Вашу инициативу"></textarea>
                </div>

                <div class="form__item">
                  <label class="form__label">Введите адрес или поставьте точку на карте:</label>
                  <input class="form__input" type="text" name="initiative" placeholder="Введите адрес">
                </div>

                <div class="form__item map">
                  <!-- интерактивная карта  -->
                  <div class="map__wrapper">
                    <div id="map" class="map__content"></div>
                  </div>
                </div>
                <!-- загрузка файла  -->
                <div class="form__item">
                  <input class="form__input" type="file" name="file" placeholder="Прикрепить фото">
                </div>

                <div class="form__item">
                  <label class="form__label" for="">Ваше имя:<small>*</small></label>
                  <input class="form__input" type="text" name="name" placeholder="Введите ФИО полностью">
                </div>

                <div class="form__item">
                  <label class="form__label">Телефон<small>*</small></label>
                  <input class="form__input" type="tel" name="telephone" placeholder="Введите Ваш телефон">
                </div>

                <div class="form__item">
                  <label class="form__label">E-mail:</label>
                  <input class="form__input" type="email" name="email address" placeholder="Для отправки ответа">
                </div>

                <div class="form__item">
                  <label class="accept" for="check-accept">
                    <input class="visually-hidden" type="checkbox" name="confirm" id="check-accept" required checked>
                    <p>Даю согласие на обработку <a href="#" target="_blank">персональных данных</a>
                    </p>
                  </label>
                </div>



                <div class="form__item">
                  <button class="button button--mega" type="submit"><span>Написать сообщение</span></button>
                </div>

                <p class="form__details"><small>*</small> - Обязательные для заполнения поля</p>
              </div>
            </form>
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
