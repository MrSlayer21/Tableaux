<?php
$panier = [
    ['nom' => 'Produit 1', 'quantite' => 3, 'prix' => 1359],
    ['nom' => 'Produit 2', 'quantite' => 2, 'prix' => 749],
    ['nom' => 'Produit 3', 'quantite' => 1, 'prix' => 259],
];

$total = 0;
foreach ($panier as $item) {
    $total += $item['quantite'] * $item['prix'];
}
echo "Total : $total $";
?>
