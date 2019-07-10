<?php


$personnages = [
    'Yoda', "Darth Vader", "Darth Sidious", "R2D2", "C3P0", "Chewbaka"
];

$name = $personnages[rand(0, 5)];

echo "$name <br>";

// test si $name égal "Darth Vader" ou "Darth Sidious", affiche "Sith"
if ($name == 'Darth Vader' || $name == 'Darth Sidious') {
    echo "Sith";
    // sinon si $name égal "Yoda", affiche "Jedi"
} elseif ($name == 'Yoda') {
    echo "jedi";
} else {
    // sinon affiche "sans doute une personne sans pouvoir"
    echo "sans doute une personne sans pouvoir";
}