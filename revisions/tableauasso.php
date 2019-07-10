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
