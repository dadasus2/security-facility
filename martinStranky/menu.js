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



const TL = gsap.timeline()

TL.from('.logo', {
    autoAlpha: 0, x: -200, ease: "power4.out", duration: 2,
})
    .from('.nav a', {
        autoAlpha: 0, y: -200, ease: "power4.out", duration: 2, stagger: 0.1
    }, '<')
    .from('.intro h1', {
        opacity: 0, autoAlpha: 0, y: -400, ease: "power4.out", duration: 1.5
    }, '-=1.7')
    .from('.intro h2', {
        scale: 0, opacity: 0, autoAlpha: 0, ease: "power4.out", duration: 1.5
    }, '-=1.7')
    .from('.intro img', {
        opacity: 0, autoAlpha: 0, ease: "power4.out", height: 0, duration: 1.5
    }, '-=1.7')
    .from('.intro button', {
        opacity: 0, autoAlpha: 0, ease: "power4.out", duration: 1.5
    }, '-=1.7')





