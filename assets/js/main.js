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
        'hat': 'Hat'
    },
    'fr': {
        'top': 'Haut',
        'bottom': 'Bas',
        'hat': 'Chapeau'
    }
}

const translateItems = document.querySelectorAll('#translate'),
    langSpan = document.querySelector('#lang'),
    french = document.querySelector('#fr'),
    english = document.querySelector('#en')

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