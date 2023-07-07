const hamburger = document.querySelector('.hamburger-container'),
    menu = document.querySelector('.menu'),
    rightMenu = document.querySelector('.right-menu'),
    header = document.querySelector('header')

hamburger.addEventListener('click', () => {
    menu.classList.toggle('show');
    rightMenu.classList.toggle('show');
    if(menu.classList.contains('show')) {
        if(window.innerWidth < 791){
            header.style.height = '100svh';
        }else {
            header.style.height = '100px';
        }
    } else {
        header.style.height = '100px';
    }
})

addEventListener('resize', () => {
    if(menu.classList.contains('show')) {
        if(window.innerWidth < 791){
            header.style.height = '100svh';
        } else {
            menu.classList.toggle('show');
            rightMenu.classList.toggle('show');
        }
    } else {
        header.style.height = '100px';
    }
})