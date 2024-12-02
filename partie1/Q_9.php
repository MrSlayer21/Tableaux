<form method="GET">
    Nombre 1 : <input type="number" name="num1"><br>
    Nombre 2 : <input type="number" name="num2"><br>
    <button type="submit">Calculer</button>
</form>
<?php
if ($_GET) {
    echo "Somme : " . ($_GET['num1'] + $_GET['num2']);
}
