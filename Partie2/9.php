<?php
$etudiants = [
    'Mark1' => ['Organic chemistry' => 15, 'Physiology' => 14, 'Cytology' => 18, 'English' => 15],
    'Mark2' => ['Organic chemistry' => 14, 'Physiology' => 15, 'Cytology' => 17, 'English' => 16],
    'Mark3' => ['Organic chemistry' => 13, 'Physiology' => 16, 'Cytology' => 16, 'English' => 17],
    'Mark4' => ['Organic chemistry' => 12, 'Physiology' => 17, 'Cytology' => 15, 'English' => 18],
];

foreach ($etudiants as $nom => $notes) {
    $somme = 0;
    $nNotes = 0;

    foreach ($notes as $matiere => $note) {
        $somme += $note;
        $nNotes++;
    }

    $moyenne = $somme / $nNotes;

    echo "$nom : $moyenne<br>";
}
?>
