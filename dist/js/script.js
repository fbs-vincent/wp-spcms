document.addEventListener('DOMContentLoaded', function () {
  new Splide('#splides', {
    type: 'loop',
    perPage: 1,
    autoplay: true,
    pauseOnHover: true,
  }).mount();
});

const btnBurger = document.querySelector('.burger-menu');

btnBurger.addEventListener('click', () => {
  const topMenu = document.querySelector('.menu-top-bar-container');

  topMenu.classList.toggle('menu-open');
  btnBurger.classList.toggle('burger-close');
});
