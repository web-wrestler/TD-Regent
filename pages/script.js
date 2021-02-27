const btnHeader = document.getElementById('header');
const btnMenu = document.getElementById('menu');
const mobileMenu = document.querySelector('.mobile-menu');

function addClass() {
  mobileMenu.classList.add('mobile-menu_opened');
}
function removeClass() {
  mobileMenu.classList.remove('mobile-menu_opened');
}


btnHeader.addEventListener('click', addClass);
btnMenu.addEventListener('click', removeClass);