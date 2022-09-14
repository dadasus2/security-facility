const closeMenu = document.querySelector('.close-menu');
const openMenu = document.querySelector('.fa-bars');
const header = document.querySelector('header');
const menu = document.querySelector('ul');

openMenu.addEventListener('click', () => {
    menu.classList.add('menu-show');
    header.classList.add('ztmav')
})
closeMenu.addEventListener('click', () => {
    menu.classList.remove('menu-show');
    header.classList.remove('ztmav')
})



window.addEventListener('scroll', function () {
    var nav = document.querySelector('menu');
    nav.classList.toggle('sticky', this.window.scrollY > 30);
});