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


gsap.from('.nav a', {
    autoAlpha: 0, y: -200, ease: "power4.out", stagger: 0.1, duration: 2
})

gsap.from('.intro h1', {
    opacity: 0, autoAlpha: 0, y: -400, ease: "power4.out", delay: 1, duration: 2
})
gsap.from('.intro h2', {
    scale: 0, opacity: 0, autoAlpha: 0, ease: "power4.out", delay: 1.5, duration: 2
})
gsap.from('.intro img', {
    opacity: 0, autoAlpha: 0, ease: "power4.out", delay: 2, duration: 1, height: 0
})
gsap.from('.intro button', {
    opacity: 0, autoAlpha: 0, ease: "power4.out", delay: 2.3, duration: 2,
})


