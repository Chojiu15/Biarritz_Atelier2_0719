<?php

$jedis = ['Yoda', 'Obi-Wan Kenobi', 'Luke Skywalker', 'Windi', 'Qui-Gon Jinn'];
$jedis[] = 'Rey';
// var_dump($jedis);
echo $jedis[0];

foreach ($jedis as $value) {
    echo "$value <br>";
}
