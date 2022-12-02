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
  menuButton.addEventListener('click', function () {
    document.body.classList.toggle('mob-menu-open');
    menuButton.classList.toggle('open');
  });

  // показ подкатегорий в шапке сайта при наведени на пункт в меню
  let headerMenuLink = document.querySelectorAll('.header .navigation__link');
  for (let item of headerMenuLink) {
    item.addEventListener('mouseover', (event) => {
      event.target.classList.add('active');
    });
    item.addEventListener('onmouseout', (event) => {
      event.target.classList.remove('active');
    });
  };



});

document.addEventListener('click', e => console.log(e.target));
