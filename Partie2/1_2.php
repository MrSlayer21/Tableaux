<?php
$employes = [
    ['nom' => 'MARK0', 'poste' => 'Manager', 'salaire' => 7500],
    ['nom' => 'Mark1', 'poste' => 'Developpeur', 'salaire' => 5000],
    ['nom' => 'Mark2', 'poste' => 'Developpeur', 'salaire' => 5100],
    ['nom' => 'Mark3', 'poste' => 'Developpeur', 'salaire' => 5200],
    ['nom' => 'Mark4', 'poste' => 'Developpeur', 'salaire' => 5300],
    ['nom' => 'Mark5', 'poste' => 'Developpeur', 'salaire' => 5400],
    ['nom' => 'Mark6', 'poste' => 'Developpeur', 'salaire' => 5500],
    ['nom' => 'Mark7', 'poste' => 'Developpeur', 'salaire' => 5600],
];

function SalaireMoyen($employes) {
    $total = 0.0;
    foreach ($employes as $e)
    {
        $total = $total + $e['salaire'];
    }
    $moyenne = $total / count($employes);
    echo "Salaire moyen : $moyenne$";
}

SalaireMoyen($employes);
?>



<form method="POST">
    Nom d'employe : <input type="text" name="nom" required>
    <button type="submit">Rechercher</button>
</form>

<?php
if ($_POST) {
    $nomRecherche = strtolower($_POST['nom']);
    foreach ($employes as $employe) {
        if (strtolower($employe['nom']) === $nomRecherche) {
            echo "Employe trouve : " . implode(", ", $employe);
            break;
        }
    }
}
?>

