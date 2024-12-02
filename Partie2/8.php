<form method="POST">
        
        <input type="checkbox" name="produits[]" value="Produit 1">
        <label> Produit 1 - 10 $</label><br>
        <input type="checkbox" name="produits[]" value="Produit 2">
        <label> Produit 2 - 26 $</label><br>
        <input type="checkbox" name="produits[]" value="Produit 3">
        <label> Produit 3 - 14 $ </label><br>
        <input type="checkbox" name="produits[]" value="Produit 4">
        <label> Produit 4 - 28 $ </label><br>
        <input type="checkbox" name="produits[]" value="Produit 5">
        <label> Produit 5 - 75 $ </label><br>
        <button type="submit">Valider</button>
    </form>


    <?php
    $produits = [
    "Produit 1" => 10,
    "Produit 2" => 26,
    "Produit 3" => 14,
    "Produit 4" => 28,
    "Produit 5" => 75,
];

if ($_POST) {
    $select = $_POST['produits'];
    $total = 0;

    echo "Produits choisis :<br>";
    foreach ($select as $p) {
        if (isset($produits[$p])) {
            echo "- $p : {$produits[$p]} $<br>";
            $total += $produits[$p];
        }
    }
    echo "Total : $total $";
} else {
    echo "Aucun produit.";
}
?>