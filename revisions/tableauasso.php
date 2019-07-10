<?php

$jediAge = [
    'Yoda' => [900, 'petit monstre vert'],
    'Leia' => [19],
    'Luke Skywalker' => [19],
    'Darth Vader' => [46],
    'Chewbacca' => [200]
];

$jediAge['Han Solo'] = [29];

asort($jediAge);

echo "<ul>";

foreach ($jediAge as $key => $value) {
    echo "<li>$key $value[0]</li>";
}

echo " </ul>";

ksort($jediAge);

echo "<ul>";

foreach ($jediAge as $key => $value) {
    echo "<li>$key $value[0]</li>";
}

echo " </ul>";


echo "<ul>";
foreach ($jediAge as $key => $value) {

    if ($value[0] > 100) {
        echo "<li>$key $value[0]</li>";
    }
}
echo " </ul>";

$jediRace = [
    'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
    'Sith' => ['Darth Varder', 'Darth Maul', 'Dooku'],
    'Gungan' => ['Jar Jar Binks'],
    'Human' => ['Han Solo', 'Leia']
];

foreach ($jediRace as $race => $noms) {
    echo "<h2> $race </h2>";
    echo "<ul>";
    foreach ($noms as $nom) {
        echo "<li>$nom</li>";
    }
    echo "</ul>";
}

echo "<ul>";

foreach ($jediRace as $race => $value) {
    echo "<li>$race - ".count($value)."</li>";
}

echo "</ul>";
