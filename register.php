<?php

session_start();

require_once './class/Users.php';
require_once './includes/database.php';

$errors = [];
$users = new Users($db);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $prenom = strip_tags($_POST['prenom']);
    $nom = strip_tags($_POST['nom']);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = $_POST['password'];
    $tel = $_POST['phone'];

    if(!$email) $errors[] = 'Veuillez entrer une adresse email valide.';
    if (strlen($prenom) < 3 || strlen($prenom) > 25) $errors[] = 'Le prénom doit contenir entre ' . 3 . ' et ' . 25 . ' caractères.';
    if (strlen($nom) < 3 || strlen($nom) > 25) $errors[] = 'Le nom doit contenir entre ' . 3 . ' et ' . 25 . ' caractères.';
    if (strlen($password) < 3 || strlen($password) > 25) $errors[] = 'Le mot de passe doit contenir entre ' . 3 . ' et ' . 25 . ' caractères.';
    if(empty($email)) $errors[] = "L'adresse email ne doit pas être vide.";
    if(empty($tel)) $errors[] = "Le numéro de téléphone ne doit pas être vide.";


    if ($prenom && $nom && $email && $tel && $password) {

        if (empty($errors)) {

            $results = $users->createUsers($prenom, $nom, $email, $password, $tel);
            switch ($results) {
                case true:
                    $_SESSION['user'] = [
                        'id' => $db->lastInsertId(),
                        'prenom' => $prenom,
                        'nom' => $nom,
                        'email' => $email,
                        'tel' => $tel
                    ];
                    header('Location: ./account.php');
                    break;
                default:
                    $errors[] = 'Cet email existe déjà.';
                    break;
            }
        }
    }
}


include_once './includes/header.inc.php';

?>
    <main>
        <div class="flex login--container">
            <form class="flex" method="post">
                <?php
                    
                    if(!empty($errors)){
                        
                        ?>

                        <div class="errors">

                            <?php

                                foreach($errors as $error) {
                                    echo '<p>' . $error . '</p>';
                                }

                            ?>

                        </div>
                        
                        <?php

                    }
                ?>
                <div class="flex">
                    <label for="prenom">Prenom</label>
                    <input type="text" name="prenom" id="prenom">
                </div>
                <div class="flex">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div class="flex">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="flex">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="flex">
                    <label for="phone">Téléphone</label>
                    <input type="tel" name="phone" id="phone">
                </div>
                <button type="submit">S'inscrire</button>
                <a href="/login.php">Se connecter</a>
            </form>
        </div>
    </main>

    <?php

include_once './includes/footer.inc.php';

?>