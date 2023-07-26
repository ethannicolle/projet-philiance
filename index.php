<?php

    session_start();
    include_once './includes/header.inc.php';

?>

    <main>
        <section class="flex hero">
            <div class="flex hero--section text--section">
                <h1 class="hero--p" id="translate" data-translate="slogan">Le soleil et la lune font de la
                    lumière ensemble.</h1>
                <a href="#products" id="translate" data-translate="our-products">Nos produits</a>
            </div>
            <div class="hero--section image--section">
                <img src="./assets/img/banner.jpg" width="95%" alt="">
            </div>
        </section>
        <section id="products" class="flex our-products">
            <h2 id="translate" data-translate="our-products">Nos produits</h3>
            <div class="grid pres-grid">
                <div class="top product-pres">
                    <div class="flex button-show">
                        <a class="flex" href="products.php?type=top" id="translate" data-translate='top'>Haut</a>
                    </div>
                </div>
                <div class="bottom product-pres">
                    <div class="flex button-show">
                        <a class="flex" href="products.php?type=bottom" id="translate" data-translate='bottom'>Bas</a>
                    </div>
                </div>
                <div class="hat product-pres">
                    <div class="flex button-show">
                        <a class="flex" href="products.php?type=hat" id="translate" data-translate='hat'>Chapeau</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php 
    include_once './includes/footer.inc.php';

    ?>