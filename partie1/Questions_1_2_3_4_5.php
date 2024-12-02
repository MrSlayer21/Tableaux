<?php

echo "<br><br><br> Question 1 et 2 : <br><br>";

$etudiant = [
    'nom' => 'Mark1',
    'prenom' => 'Mark2',
    'matricule' => '15926'
];
echo "Nom : {$etudiant['nom']}<br>Prenom : {$etudiant['prenom']}<br>Matricule : {$etudiant['matricule']}";


$etudiant['note'] = 18; 
$etudiant['note'] = 20;
echo "<br>Note : {$etudiant['note']}";


echo "<br><br><br> Question 3 : <br><br>";


$produits = [
    'Produit1' => 159,
    'Produit2' => 468,
    'Produit3' => 215
];
foreach ($produits as $nom => $prix) {
    echo "$nom : $prix $<br>";
}

echo "<br><br><br> Question 4 : <br><br>";

$scores = [
    'Mark1' => 10,
    'Mark2' => 20,
    'Mark3' => 30,
    'Mark4' => 40,
    'Mark5' => 50,
    'Mark6' => 60
];

$total = 0;
$nScores = 0;

foreach ($scores as $nom => $s) {
    $total += $s;
    $nScores++;
}
$moyenne = $total / $nScores;
echo "Moyenne : $moyenne";

echo "<br><br><br> Question 5 : <br><br>";


$pays = [
    'Maroc' => 40,
    'France' => 80,
    'Holande' => 67
];
arsort($pays);
foreach ($pays as $nom => $p) {
    echo "$nom : $p habitants<br>";
}