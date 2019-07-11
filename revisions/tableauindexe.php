<?php
// Construire un tableau $jedis (indexé numériquement)
$jedis = ['Yoda', 'Obi-Wan Kenobi', 'Luke Skywalker', 'Windi', 'Qui-Gon Jinn'];
// Ajouter 'Rey' dans le tableau
$jedis[] = 'Rey';
// var_dump($jedis);
// Afficher le plus expérimenté uniquement, en partant du principe que c'est YODA
echo $jedis[0];
// Boucler pour afficher tous les jedis
foreach ($jedis as $value) {
    echo "$value <br>";
}