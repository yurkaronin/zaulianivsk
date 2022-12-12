// Глобальные переменные
const menuButton = document.querySelector('.nav-button');
const footerLink = document.querySelector('.footer__head-link');
const mobileLink = document.querySelectorAll('.mobile-menu__link');

// инициализация кастомных select
if (document.querySelector('#select-1')) {
  const select1 = new ItcCustomSelect('#select-1');
};
if (document.querySelector('#select-2')) {
  const select2 = new ItcCustomSelect('#select-2');
};
if (document.querySelector('#select-3')) {
  const select3 = new ItcCustomSelect('#select-3');
};
if (document.querySelector('#select-4')) {
  const select4 = new ItcCustomSelect('#select-4');
};
if (document.querySelector('#select-5')) {
  const select5 = new ItcCustomSelect('#select-5');
};

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
  if (menuButton) {
    menuButton.addEventListener('click', function () {
      document.body.classList.toggle('mob-menu-open');
      menuButton.classList.toggle('open');
    });
  };


  // показ подкатегорий при наведении на пункт в меню
  let headerMenuLink = document.querySelectorAll('.header .navigation__link');
  if (document.body.clientWidth > 1440) {
    for (let item of headerMenuLink) {
      item.addEventListener('mouseover', function (event) {
        this.classList.add('active');
      });

      item.addEventListener('mouseout', function (event) {
        this.classList.remove('active');
      });

    };
  } else {

    for (let item of headerMenuLink) {
      item.addEventListener('click', function (e) {
        if (item.classList.contains('navigation-link-mod')) {
          e.preventDefault();
          // item.classList.toggle('mob-menu-open');
          item.parentNode.classList.toggle('active');
        } else {
          e.preventDefault();
          item.parentNode.classList.toggle('active-mod');
        }

      });

    };
  };

  // аккордеоны в подвале
  let footerMenuLink = document.querySelectorAll('.footer-link-mod');
  if (document.body.clientWidth < 550) {
    console.log('111');
    // сворачиваем аккордеоны намобилках
    for (let item of footerMenuLink) {
      item.parentNode.classList.remove('active-mod');
      item.parentNode.classList.remove('active');
    };
  }
  for (let item of footerMenuLink) {
    item.addEventListener('click', function (e) {
      if (item.classList.contains('link-mod')) {
        e.preventDefault();
        // item.classList.toggle('mob-menu-open');
        item.parentNode.classList.toggle('active');
      } else {
        e.preventDefault();
        item.parentNode.classList.toggle('active-mod');
      }

    });

  };


  if (document.querySelector('#slider-photo')) {
    const photoSlider = new Swiper('#slider-photo .swiper', {
      // Optional parameters
      loop: true,
      slidesPerView: 1,
      spaceBetween: 32,
      // If we need pagination
      pagination: {
        el: '#slider-photo .swiper-pagination',
        type: "fraction",
      },

      // Navigation arrows
      navigation: {
        nextEl: '#slider-photo .swiper-button-next',
        prevEl: '#slider-photo .swiper-button-prev',
      },

    });
  };

  // Табы
  if (document.querySelector('#js-tabs')) {
    // кнопка показа таба
    const tab = document.getElementsByClassName('tabs__button');
    // блок с содержимым таба
    const tabContent = document.getElementsByClassName('tabContent');
    // прячем все вкладки добавляя классы
    hideTabsContent(0);
    // и показываем первый таб и активируем вкладку
    showTabsContent(0);

    document.getElementById('js-tabs').addEventListener('click', function (event) {
      // Временная переменная для сохранения элемента по которому кликнули
      var target = event.target;

      if (target.className == 'tabs__button') {
        for (var i = 0; i < tab.length; i++) {
          if (target == tab[i]) {
            showTabsContent(i);
            break;
          }
        }
      }
    });

    function hideTabsContent(a) {
      for (var i = a; i < tabContent.length; i++) {

        tabContent[i].classList.remove('show');
        tabContent[i].classList.add("hide");
        tab[i].classList.remove('active');
      }
    };

    function showTabsContent(b) {
      if (tabContent[b].classList.contains('hide')) {
        hideTabsContent(0);

        tab[b].classList.add('active');
        tabContent[b].classList.remove('hide');
        tabContent[b].classList.add('show');
      }
    };
  };

  // плавный скролл

});

SmoothScroll({
  // Время скролла 400 = 0.4 секунды
  animationTime: 800,
  // Размер шага в пикселях
  stepSize: 75,

  // Дополнительные настройки:

  // Ускорение
  accelerationDelta: 30,
  // Максимальное ускорение
  accelerationMax: 2,

  // Поддержка клавиатуры
  keyboardSupport: true,
  // Шаг скролла стрелками на клавиатуре в пикселях
  arrowScroll: 50,

  // Pulse (less tweakable)
  // ratio of "tail" to "acceleration"
  pulseAlgorithm: true,
  pulseScale: 4,
  pulseNormalize: 1,

  // Поддержка тачпада
  touchpadSupport: true,
});



document.addEventListener('click', e => console.log(e.target));
