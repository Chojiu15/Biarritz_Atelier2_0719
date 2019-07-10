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
for ($i = 25; $i < 51; $i += 5) {
    echo $i . " première boucle" . "<br \>";
}
echo "<br \>";
echo "afficher les valeurs possibles entre 10 à -10, tous les 3  <br \>";

for ($i = 10; $i >= -10; $i -= 3) {
    echo $i . " première boucle" . "<br \>";
}

echo "<br \> <hr>";
/* condition  */
$name = 'Darth Vader';

if ($name === "Darth Vader" || $name === "Darth Sidious") {
    echo "yesss";
} elseif ($name === "yoda") {
    echo "jedi";
} else {
    echo "sans doute une personne sans pouvoir";
}

echo "<br \> <hr>";

$tableau = array("yoda" => 900, "Leia" => 19, "Luke Skywalker" => 19, "Darth Vader" => 46, "Chewbacca" => 200);
$tableau["Han Solo"] = 29;

asort($tableau);

echo "<ul>";
foreach ($tableau as $key => $value) {
    echo "<li>" . $key . " age " . $value . " ans" . "</li>";
}
echo "</ul>";
echo "<br \>";

ksort($tableau);
// recherche dans un tableau 
echo "<br \>";
echo "<ul>";
foreach ($tableau as $key => $value) {
    echo "<li>" . $key . " age " . $value . " ans" . "</li>";
}
echo "</ul>";
echo "<br \>";

echo "<ul>";
foreach ($tableau as $key => $value) {
    if ($value > 100) {
        echo "<li>" . $key . " age " . $value . " ans" . "</li>";
    }
}
echo "</ul>";
echo "<hr>";

$starwars = [
    "Jedi" => ["Luke Skywalker", "Yoda", "Windu"],
    "Sith" => [" Darth Vader", "Darth Maul", "Dooku"],
    "Gungan" => ["Jar Jar", "Binks"],
    "Human" => ["Han Solo", " Leia"]
];

echo "<ul>";
foreach ($starwars as $key => $value) {
    foreach ($value as $nextCle => $nextVal) {
        echo "<h2>".$key."</h2>"."<ul><li>".$nextVal."</li></ul>";
    }
}

echo "</ul>";
echo "<hr>";
