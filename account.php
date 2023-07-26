<?php
session_start();

if(!isset($_SESSION['user'])) {
    header('Location: ./login.php');
}



include_once './includes/header.inc.php';
?>
    <main>
        <div class="flex account--container">
            <div class="flex account-card">
                <div class="flex account-image">
                    <img src="./assets/img/profile.png" width="50px" alt="">
                </div>
                <div class="account-info">
                    <div class="account-name">
                        <span><?= $_SESSION['user']['nom'] . ' ' . $_SESSION['user']['prenom'] ?></span>
                    </div>
                    <div class="account-email">
                        <span><?= $_SESSION['user']['email'] ?></span>
                    </div>
                    <div class="account-phone">
                        <span>+33<?= $_SESSION['user']['tel'] ?></span>
                    </div>
                </div>
                <a href="logout.php">Se deconnecter</a>
            </div>
        </div>
    </main>
<?php
include_once './includes/footer.inc.php';
?>