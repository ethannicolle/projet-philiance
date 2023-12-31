<?php
    if(!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>US Streetwear</title>
    <link rel="stylesheet" href="./assets/css/main.css">
    <script defer src="./assets/js/main.js"></script>
</head>

<body>

    <nav class="flex">
        <div class="flex container logo--container">
            <h2 class="logo">US</h2>
        </div>

        <div class="flex container nav--container">
            <div class="flex nav--links">
                <ul class="flex nav--list">
                    <li class="flex nav--items" id="translate" data-translate='top' data-link="true" data-url="products.php?type=top">Haut</li>
                    <li class="flex nav--items" id="translate" data-translate='bottom' data-link="true" data-url="products.php?type=bottom">Bas</li>
                    <li class="flex nav--items" id="translate" data-translate='hat' data-link="true" data-url="products.php?type=hat">Chapeau</li>
                </ul>
            </div>
            <div class="flex nav--client">
                <ul class="flex nav--list">
                    <li class="flex nav--items menu--toggler">
                        <span id="lang">FR</span>
                        <ul class="language-sub-menu">
                            <li class="flex sub-items" id='fr'>FR</li>
                            <li class="flex sub-items" id='en'>EN</li>
                        </ul>
                    </li>
                    <li id="panier" class="flex nav--items">
                        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_15_35)">
                                <rect width="24" height="24" fill="white" />
                                <path
                                    d="M5.33331 6H19.8672C20.4687 6 20.9341 6.52718 20.8595 7.12403L20.1095 13.124C20.0469 13.6245 19.6215 14 19.1172 14H16.5555H9.44442H7.99998"
                                    stroke="#000000" stroke-linejoin="round" />
                                <path
                                    d="M2 4H4.23362C4.68578 4 5.08169 4.30341 5.19924 4.74003L8.30076 16.26C8.41831 16.6966 8.81422 17 9.26638 17H19"
                                    stroke="#000000" stroke-linecap="round" stroke-linejoin="round" />
                                <circle cx="10" cy="20" r="1" stroke="#000000" stroke-linejoin="round" />
                                <circle cx="17.5" cy="20" r="1" stroke="#000000" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_15_35">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </li>
                    <li id="account" class="flex nav--items">
                        <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_15_82)">
                                <rect width="24" height="24" fill="white" />
                                <g filter="url(#filter0_d_15_82)">
                                    <path
                                        d="M14.3365 12.3466L14.0765 11.9195C13.9082 12.022 13.8158 12.2137 13.8405 12.4092C13.8651 12.6046 14.0022 12.7674 14.1907 12.8249L14.3365 12.3466ZM9.6634 12.3466L9.80923 12.8249C9.99769 12.7674 10.1348 12.6046 10.1595 12.4092C10.1841 12.2137 10.0917 12.022 9.92339 11.9195L9.6634 12.3466ZM4.06161 19.002L3.56544 18.9402L4.06161 19.002ZM19.9383 19.002L20.4345 18.9402L19.9383 19.002ZM16 8.5C16 9.94799 15.2309 11.2168 14.0765 11.9195L14.5965 12.7737C16.0365 11.8971 17 10.3113 17 8.5H16ZM12 4.5C14.2091 4.5 16 6.29086 16 8.5H17C17 5.73858 14.7614 3.5 12 3.5V4.5ZM7.99996 8.5C7.99996 6.29086 9.79082 4.5 12 4.5V3.5C9.23854 3.5 6.99996 5.73858 6.99996 8.5H7.99996ZM9.92339 11.9195C8.76904 11.2168 7.99996 9.948 7.99996 8.5H6.99996C6.99996 10.3113 7.96342 11.8971 9.40342 12.7737L9.92339 11.9195ZM9.51758 11.8683C6.36083 12.8309 3.98356 15.5804 3.56544 18.9402L4.55778 19.0637C4.92638 16.1018 7.02381 13.6742 9.80923 12.8249L9.51758 11.8683ZM3.56544 18.9402C3.45493 19.8282 4.19055 20.5 4.99996 20.5V19.5C4.70481 19.5 4.53188 19.2719 4.55778 19.0637L3.56544 18.9402ZM4.99996 20.5H19V19.5H4.99996V20.5ZM19 20.5C19.8094 20.5 20.545 19.8282 20.4345 18.9402L19.4421 19.0637C19.468 19.2719 19.2951 19.5 19 19.5V20.5ZM20.4345 18.9402C20.0164 15.5804 17.6391 12.8309 14.4823 11.8683L14.1907 12.8249C16.9761 13.6742 19.0735 16.1018 19.4421 19.0637L20.4345 18.9402Z"
                                        fill="#000000" />
                                </g>
                            </g>
                            <defs>
                                <filter id="filter0_d_15_82" x="2.55444" y="3.5" width="18.8911" height="19"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                    <feOffset dy="1" />
                                    <feGaussianBlur stdDeviation="0.5" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_15_82" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_15_82"
                                        result="shape" />
                                </filter>
                                <clipPath id="clip0_15_82">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex container hamburger--container">
            <div class="hamburger"></div>
        </div>
    </nav>