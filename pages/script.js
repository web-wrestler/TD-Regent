//плавная прокрутка якоря
const anchors = document.querySelectorAll('a[href*="#form"]')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    const blockID = anchor.getAttribute('href').substr(1)

    document.getElementById(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}

//откритие/закрытие мобильного меню
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
