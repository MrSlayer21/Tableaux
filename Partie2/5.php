<form method="POST">
    <label for="feedback">Votre avis :</label>
    <textarea id="feedback" name="avis" required></textarea>
    <button type="submit">Envoyer</button>
</form>

<?php
$avisListe = [];
if ($_POST) {
    $avis = htmlspecialchars($_POST['avis']);
    $avisListe[] = [
        'contenu' => $avis, 
        'horodatage' => date('d/m/Y H:i:s')
    ];
}


foreach ($avisListe as $a) {
    echo "Avis : \"{$a['contenu']}\" - Recu le : {$a['horodatage']}<br>";
}
?>
