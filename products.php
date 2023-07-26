<?php
session_start();
require_once './class/Products.php';
require_once './includes/database.php';
include_once './includes/header.inc.php';

$products = new Products($db);
$produits = $products->getProducts();

var_dump($produits);
?>
    <main>
        <section class="products">
            <?php
                foreach($produits as $produit) {
                    ?>

                    <div class="product-card">
                        <div class="card-image" style="background: url('./assets/img/<?= $produit['image'] ?>'); background-size: cover;
                        background-repeat: no-repeat;
                        border-radius: inherit;">
                        </div>
                        <div class="card-title">
                            <h4><?= $produit['name'] ?></h4> <span><?= $produit['price'] ?>€</span>
                        </div>
                        <div class="card-description">
                            <p><?= $produit['description'] ?></p>
                        </div>
                        <div class="card-buy">
                            <a href="#">Acheter</a>
                        </div>
                    </div>

                    <?php
                }
            ?>
            
        </section>
    </main>

    <?php

include_once './includes/footer.inc.php';

?>