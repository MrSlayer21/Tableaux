<form method="POST">
    Email : <input type="email" name="email" required><br>
    Mot de passe : <input type="password" name="password" required><br>
    <button type="submit">Se connecter</button>
</form>

<?php
$utilisateurs = [
    'Mark1@gmail.com' => '123456',
    'Mark2@gmail.com' => '123456',
    'Mark3@gmail.com' => '123456',
    'Mark4@gmail.com' => '123456',
];
if ($_POST) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (isset($utilisateurs[$email]) && $utilisateurs[$email] === $password) {
        echo "Connexion reussie, bienvenue $email !";
    } else {
        echo "Email ou mot de passe incorrect.";
    }
}
?>
