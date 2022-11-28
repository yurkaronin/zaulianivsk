const accordion = document.querySelectorAll('.accordion');

if (accordion.length) {
  for (let i = 0, item; i < accordion.length; i++) {
    item = accordion[i];
    item.addEventListener('click', function (e) {
      // если клик по ссылке - то добавляем item класс active
      if (e.target.classList.contains('accordion__top')) {
        e.target.classList.toggle('active');
      }
    });
    if (i == 0)
      item.querySelector('.accordion__top').classList.add('active');
  }

};




