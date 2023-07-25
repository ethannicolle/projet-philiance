if(!localStorage.getItem('lang')) {
    if(navigator.language == 'fr') {
        localStorage.setItem('lang', 'fr');
    } else {
        localStorage.setItem('lang', 'en');
    }
}

const langs = {
    'en': {
        'top': 'Top',
        'bottom': 'Bottom',
        'hat': 'Hat',
        'slogan': 'The sun and the moon make light together.',
        'our-products': 'Our products'
    },
    'fr': {
        'top': 'Haut',
        'bottom': 'Bas',
        'hat': 'Chapeau',
        'slogan': 'Le soleil et la lune font de la lumière ensemble.',
        'our-products': 'Nos produits'
    }
}

const logoContainer = document.querySelector('.logo--container')

logoContainer.addEventListener('click', () => {
    location.href = '/'
})

const hamburger = document.querySelector('.hamburger--container'),
    navContainer = document.querySelector('.nav--container')

hamburger.addEventListener('click', () => {
    if(navContainer.style.display == 'none') {
        navContainer.style.display = 'flex';
    } else {
        navContainer.style.display = 'none';
    }
})

const navPanier = document.querySelector('#panier')

navPanier.addEventListener('click', () => {
    location.href = '/cart.html'
})

const navCompte = document.querySelector('#account')

navCompte.addEventListener('click', () => {
    location.href = '/account.html'
})

const translateItems = document.querySelectorAll('#translate'),
    langSpan = document.querySelector('#lang'),
    french = document.querySelector('#fr'),
    english = document.querySelector('#en')

translateItems.forEach(items => {
    if(items.dataset.link == "true") {
        items.addEventListener('click', () => {
            location.href = items.dataset.url
        })
    }
})

french.addEventListener('click', () => {
    localStorage.setItem('lang', 'fr')
    location.reload()
})

english.addEventListener('click', () => {
    localStorage.setItem('lang', 'en')
    location.reload()
})

switch(localStorage.getItem('lang')) {
    case 'fr':
        langSpan.textContent = 'FR'
        for(let lang in langs.fr) {
            translateItems.forEach(translateElement => {
                if(translateElement.dataset.translate === lang) {
                    translateElement.textContent = langs.fr[lang]
                }
            })
        }
        break;
    default:
        langSpan.textContent = 'EN'
        for(let lang in langs.en) {
            translateItems.forEach(translateElement => {
                if(translateElement.dataset.translate === lang) {
                    translateElement.textContent = langs.en[lang]
                }
            })
        }
        break;
}

const menuToggler = document.querySelector('.menu--toggler'),
    languageSubMenu = document.querySelector('.language-sub-menu')

menuToggler.addEventListener('click', () => {
    languageSubMenu.classList.toggle('show-sub-menu')
})