if (!localStorage.getItem('lang')) {
    localStorage.setItem('lang', navigator.language)
}

let langs = {
    'en': {
        'lang': 'EN',
        'haut': 'Tops',
        'bas': 'Bottoms',
        'chapeau': 'Hats',
        'vetements': 'Our clothes'
    },
    'fr': {
        'lang': 'FR',
        'haut': 'Haut',
        'bas': 'Bas',
        'chapeau': 'Chapeau',
        'vetements': 'Nos vêtements'
    }
}

const menuToggler = document.querySelector('.toggle-menu'),
    langSelector = document.querySelector('.sub-menu'),
    translate = document.querySelectorAll('#translate');

menuToggler.addEventListener('click', (event) => {
    langSelector.classList.toggle('sub-menu-show');
})

const french = document.querySelector('.french'),
    english = document.querySelector('.english')

french.addEventListener('click', () => {
    localStorage.setItem('lang', 'fr')
    location.reload()
})

english.addEventListener('click', () => {
    localStorage.setItem('lang', 'en')
    location.reload()
})

if (localStorage.getItem('lang') === 'fr') {
    for (let lang in langs.fr) {
        translate.forEach((translation) => {
            if (translation.dataset.type === lang) {
                translation.textContent = langs.fr[lang]
            }
        })
    }
} else {
    for (let lang in langs.en) {
        translate.forEach((translation) => {
            if (translation.dataset.type === lang) {
                translation.textContent = langs.en[lang]
            }
        })
    }
}

const hamburger = document.querySelector('.hamburger-container'),
    menu = document.querySelector('.menu'),
    rightMenu = document.querySelector('.right-menu'),
    header = document.querySelector('header')

hamburger.addEventListener('click', () => {
    menu.classList.toggle('show');
    rightMenu.classList.toggle('show');
    if (menu.classList.contains('show')) {
        if (window.innerWidth < 791) {
            header.style.height = '100svh';
        } else {
            header.style.height = '100px';
        }
    } else {
        header.style.height = '100px';
    }
})

addEventListener('resize', () => {
    if (menu.classList.contains('show')) {
        if (window.innerWidth < 791) {
            header.style.height = '100svh';
        } else {
            menu.classList.toggle('show');
            rightMenu.classList.toggle('show');
            header.style.height = '100px';
        }
    } else {
        header.style.height = '100px';
    }
})

