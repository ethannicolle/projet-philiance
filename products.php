<?php
session_start();

require_once './class/Products.php';
require_once './includes/database.php';
$products = new Products($db);

switch($_GET['type']) {
    case 'top':
        $produits = $products->getProductsByCategory('top');
    break;
    case 'bottom':
        $produits = $products->getProductsByCategory('bottom');
    break;
    case 'hat':
        $produits = $products->getProductsByCategory('hat');
    break;
    default:
        header('Location: /index.php');
        break;
}

include_once './includes/header.inc.php';



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
                            <a href="addtocart.php?id=<?= $produit['id'] ?>">Acheter</a>
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