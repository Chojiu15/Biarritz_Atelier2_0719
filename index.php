<?php
echo "afficher de 0 à 9 inclus via une boucle <br \>";

for ($i = 0; $i < 10; $i++) {
    echo $i . " première boucle" . "<br \>";
}
echo "<br \>";

echo " afficher de 0 à 10 inclus via une boucle <br \>";
for ($i = 0; $i < 11; $i++) {
    echo $i . " première boucle" . "<br \>";
}

echo " afficher de 1 à 10 inclus via une boucle <br \>";
for ($i = 1; $i < 11; $i++) {
    echo $i . " première boucle" . "<br \>";
}


echo "<br \>";
echo " afficher de 10 à 0 inclus via une boucle <br \>";

/* afficher de 0 à 9 inclus via une boucle */
for ($i = 10; $i > -1; $i--) {
    echo $i . " première boucle" . "<br \>";
}

echo "<br \>";
echo "afficher de 25 à 50 inclus, tous les 5 <br \>";
for ($i = 25; $i < 51; $i+=5) {
    echo $i . " première boucle" . "<br \>";
}
echo "<br \>";
echo "afficher les valeurs possibles entre 10 à -10, tous les 3  <br \>";

for ($i=10; $i >=-10  ; $i-=3) { 
    echo $i . " première boucle" . "<br \>";
}

echo "<br \> <hr>";