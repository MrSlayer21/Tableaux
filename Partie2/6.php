<?php
$villes = ['London' => 24, 'Castlevania' => 30, 'Australia' => 35, 'Earth' => 70];

$plusChaud = null;
$tempMax = 0;  

foreach ($villes as $v => $temperature) {
    if ($temperature > $tempMax) {
        $tempMax = $temperature;
        $plusChaud = $v;
    }
}

echo "La ville la plus chaude est $plusChaud avec $tempMax C.";
?>
