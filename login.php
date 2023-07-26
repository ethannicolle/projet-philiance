<?php
    session_start();
    require_once './includes/database.php';
    require_once './class/Users.php';

    $users = new Users($db);

    $error = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];
    
        if (strlen($password) < 3 || strlen($password) > 25) $error = 'Email ou mot de passe invalide.';
        if(empty($email)) $error = "Email ou mot de passe invalide.";
    
        if ($email && $password) {
    
            if (empty($errors)) {
    
                $results = $users->logUser($email, $password);
                switch ($results) {
                    default:
                        $_SESSION['user'] = [
                            'id' => $results['id'],
                            'prenom' => $results['prenom'],
                            'nom' => $results['nom'],
                            'email' => $results['email'],
                            'tel' => $results['tel']
                        ];
                        header('Location: ./account.php');
                        break;
                    case false:
                        $error = 'Email ou mot de passe invalide.';
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
                <div class="flex">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="flex">
                    <label for="password">Mot de passe</label>
                    <input type="password" name="password" id="password">
                </div>
                <button type="submit">Connexion</button>
                <a href="/register.php">S'inscrire</a>
            </form>
        </div>
    </main>

<?php

include_once './includes/footer.inc.php';

?>