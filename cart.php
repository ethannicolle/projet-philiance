<?php
session_start();
include_once './includes/header.inc.php';

$total = 0;

?>
    <main>
        <div class="flex cart--container-all">
            <section class="flex cart--container">
                
                <?php
                if(!empty($_SESSION['cart'])) {

                    foreach($_SESSION['cart'] as $cartitem) {

                        $total += $cartitem['price'];
                    ?>
                    
                    
                    <div class="cart">
                    <div class="flex product-cart">
                        <div class="cart-image" style="background: url('./assets/img/<?= $cartitem['image'] ?>'); background-size: cover;
                        background-repeat: no-repeat;
                        border-radius: inherit;"></div>
                        <div class="flex cart-info">
                            <div class="cart-title">
                                <span><?= $cartitem['name'] ?></span>
                            </div>
                            <div class="cart-description">
                                <p><?= $cartitem['description'] ?></p>
                            </div>
                        </div>
                        <div class="flex cart-price">
                            <span><?= $cartitem['price'] ?>€</span>
                        </div>
                    </div>
                </div>
                    <?php
                }
            } else {
                    echo 'Aucun article dans votre panier !';
                }
                ?>
            </section>
            <section class="flex buy--container">
                    <div class="price">
                        <p>Prix total : <?= $total ?>€</p>
                    </div>
                    <div class="buy-now">
                        <a href="#">Acheter</a>
                    </div>
                </section>
        </div>
    </main>

    <?php

include_once './includes/footer.inc.php';

?>
                
            </section>
            <section class="flex buy--container">
                    <div class="price">
                        <p>Prix total : 19.99€</p>
                    </div>
                    <div class="buy-now">
                        <a href="#">Acheter</a>
                    </div>
                </section>
        </div>
    </main>

    <?php

include_once './includes/footer.inc.php';

?>