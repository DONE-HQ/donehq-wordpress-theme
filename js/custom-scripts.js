
document.addEventListener('DOMContentLoaded', function() {
  var humburger = document.querySelector('.menu__humburger');
  var menu = document.querySelector('.menu');

  humburger.addEventListener('click', function(event) {
    event.preventDefault(); // Предотвращаем переход по ссылке

    // Проверяем текущее состояние стилей и переключаем их
    if (menu.style.display === 'none' || menu.style.opacity === '0') {
      menu.style.display = 'flex';
      menu.style.opacity = '1';
    } else {
      menu.style.display = 'none';
      menu.style.opacity = '0';
    }
  });
});

