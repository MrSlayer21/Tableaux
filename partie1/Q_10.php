<form method="POST">
    Type de compte :
    <select name="type">
        <option value="admin">Administrateur</option>
        <option value="user">Utilisateur</option>
    </select>
    <button type="submit">Envoyer</button>
</form>
<?php
if ($_POST) {
    $type = htmlspecialchars($_POST['type']);
    
    // Utilisation d'une structure conditionnelle classique
    if ($type === 'admin') {
        echo "Bienvenue, administrateur !";
    } else {
        echo "Bienvenue, utilisateur simple !";
    }
}
