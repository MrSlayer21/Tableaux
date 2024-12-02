<form method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required><br>

    <label for="age">age :</label>
    <input type="number" id="age" name="age" required><br>

    <label for="couleur">Couleur preferee :</label>
    <select id="couleur" name="couleur" required>
        <option value="rouge">Rouge</option>
        <option value="vert">Vert</option>
        <option value="bleu">Bleu</option>
    </select><br>

    <button type="submit">Envoyer</button>
</form>

<?php
if ($_POST)  {
    $nom = htmlspecialchars($_POST['nom']);
    $age = $_POST['age'];
    $couleur = htmlspecialchars($_POST['couleur']);


    if (!is_numeric($age) || $age <= 0) {
        echo "Erreur : L'age doit etre un entier superieur a 0.";
    } else {
        echo "Bienvenue, $nom, vous avez $age ans, et votre couleur preferee est $couleur.";
    }
}
?>
