<?php

echo "<br> <br>";
// afficher de 0 à 9 inclus via une boucle
for ($i = 0; $i < 10; $i++) {
    echo $i;
    echo " ";
}

echo "<br> <br>";
// afficher de 0 à 10 inclus via une boucle
for ($i = 0; $i <= 10; $i++) {
    echo $i;
    echo " ";
}

echo "<br> <br>";
// afficher de 1 à 10 inclus via une boucle
for ($i = 1; $i <= 10; $i++) {
    echo $i;
    echo " ";
}

echo "<br> <br>";
// afficher de 10 à 0 inclus via une boucle
for ($i = 10; $i >= 0; $i--) {
    echo $i . " ";
}

echo "<br> <br>";
// afficher de 25 à 50 inclus, tous les 5
for ($i = 25; $i <= 50; $i = $i + 5) {
    echo "$i ";
}

echo "<br> <br>";
// afficher les valeurs possibles entre 10 à -10, tous les 3
for ($i = 10; $i >= -10; $i = $i - 3) {
    echo $i . " ";
}

echo "<br> <br>";