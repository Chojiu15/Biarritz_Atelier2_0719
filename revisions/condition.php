<?php


$personnages = [
    'Yoda', "Darth Vader", "Darth Sidious", "R2D2", "C3P0", "Chewbaka"
];

$name = $personnages[rand(0,5)];

echo "$name <br>";


if ($name == 'Darth Vader' || $name == 'Darth Sidious') {
    echo "Sith";
} elseif ($name == 'Yoda') {
    echo "jedi";
} else {
    echo "sans doute une personne sans pouvoir";
}


