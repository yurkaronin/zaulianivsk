// Глобальные переменные
const menuButton = document.querySelector('.nav-button');
const footerLink = document.querySelector('.footer__head-link');
const mobileLink = document.querySelectorAll('.mobile-menu__link');
// Функции
// функция подключения скриптов
function includeFiles(url) {
  var script = document.createElement('script');
  script.src = url;
  document.getElementsByTagName('head')[0].appendChild(script);
};

// модификация шапки
function headerChange() {
  let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  if (scrollTop > 10) {
    document.body.classList.add('header-sticky');
  } else {
    document.body.classList.remove('header-sticky');
  }
};

// Основная рабочая область
document.addEventListener("DOMContentLoaded", () => {
  // подключаем файлы тут
  // includeFiles("./js/parts/accordion.js");
  includeFiles("./js/parts/sliders.js");
  includeFiles("./js/parts/yandex.map.js");

  // небольшие программы
  // Проверяем состояние прокрутки страницы. если прокрутка есть - перекрашиваем шапку
  headerChange();
  // отслеживаем событие прокрутки страницы > модификация шапки
  document.addEventListener('scroll', e => {
    headerChange();
  });
  // при клике по кнопке вызова меню - добавляем служебный класс на body
  if(menuButton) {
    menuButton.addEventListener('click', function () {
      document.body.classList.toggle('mob-menu-open');
      menuButton.classList.toggle('open');
    });
  };


  // показ подкатегорий в шапке сайта при наведении на пункт в меню
  if (document.body.clientWidth < 1440) {
    let headerMenuLink = document.querySelectorAll('.header .navigation__link');
    for (let item of headerMenuLink) {
      item.addEventListener('mouseover', function (event) {
        console.log(this);
        this.classList.add('active');
      });

      item.addEventListener('mouseout', function (event) {
        this.classList.remove('active');
        console.log(this);
      });

    };
  }
  // удаляем атрибут href у ссылок с вложенными пунктами (аккордеоны)

  if (window.innerWidth <= 1440) {
    let navigationLink = document.querySelectorAll('.navigation__link--mod');
    for (let item of navigationLink) {
        item.addEventListener('click', function (e) {
          e.preventDefault();
          // item.classList.toggle('mob-menu-open');
          item.parentNode.classList.toggle('active');
        });


    };

  };

});

document.addEventListener('click', e => console.log(e.target));
