<?php

$jediAge = [
    'Yoda' => [900, 'petit monstre vert'],
    'Leia' => [19],
    'Luke Skywalker' => [19],
    'Darth Vader' => [46],
    'Chewbacca' => [200]
];
// Ajouter Han Solo, 29ans au tableau
$jediAge['Han Solo'] = [29];

// Classer le tableau du plus jeune au plus vieux, puis afficher les noms et ages dans une liste HTML
asort($jediAge);

echo "<ul>";

foreach ($jediAge as $key => $value) {
    echo "<li>$key $value[0]</li>";
}

echo " </ul>";


// Afficher les noms et ages des personnages par ordre alphabétique dans une liste HTML
ksort($jediAge);

echo "<ul>";

foreach ($jediAge as $key => $value) {
    echo "<li>$key $value[0]</li>";
}

echo " </ul>";

// Afficher uniquement les personnages ayant plus de 100ans (afficher leur age)
echo "<ul>";
foreach ($jediAge as $key => $value) {

    if ($value[0] > 100) {
        echo "<li>$key $value[0]</li>";
    }
}
echo " </ul>";


// Créé un tableau associatif avec le nom des races en clé, et en valeur, un tableau de personnages de cette race

$jediRace = [
    'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
    'Sith' => ['Darth Varder', 'Darth Maul', 'Dooku'],
    'Gungan' => ['Jar Jar Binks'],
    'Human' => ['Han Solo', 'Leia']
];

// Boucler sur le tableau afin d'afficher les noms de race dans une balise h2, suivi d'une liste pour les noms de cette race

foreach ($jediRace as $race => $noms) {
    echo "<h2> $race </h2>";
    echo "<ul>";
    foreach ($noms as $nom) {
        echo "<li>$nom</li>";
    }
    echo "</ul>";
}

// Boucler sur le tableau pour afficher dans une liste, la race et le nombre de personnages de cette race

echo "<ul>";

foreach ($jediRace as $race => $value) {
    echo "<li>$race - " . count($value) . "</li>";
}

echo "</ul>";