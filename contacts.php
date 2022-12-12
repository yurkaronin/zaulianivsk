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

  <main class="main">
    <section class="hero hero--send-page">
      <div class="wrapper">
        <div class="container container--mod">

          <h1 class="title hgroup">
            <small>Если у Вас есть вопросы звоните</small>
            <a class="title" href="tel:+78422737050">+7 (8422) 73-70-50</a>
            <small>или напишите нам</small>
          </h1>
          <!-- форма обратной связи  -->
          <div class="form">
            <form action="">
              <div class="form__grid">

                <div class="form__item">
                  <label class="form__label" for="">Ваше имя:<small>*</small></label>
                  <input class="form__input" type="text" name="name" placeholder="Введите ФИО полностью">
                </div>

                <div class="form__item">
                  <label class="form__label" for="">Телефон<small>*</small></label>
                  <input class="form__input" type="tel" name="telephone" placeholder="Введите Ваш телефон">
                </div>

                <div class="form__item">
                  <label class="form__label" for="">E-mail:</label>
                  <input class="form__input" type="email" name="email address" placeholder="Для отправки ответа">
                </div>
                <div class="form__item">
                  <label class="form__label">Сообщение:<small>*</small></label>
                  <textarea class="form__input" name="message" cols="30" rows="10"
                    placeholder="Для отправки ответа"></textarea>
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
