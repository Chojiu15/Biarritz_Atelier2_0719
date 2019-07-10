<?php
//IncludeRequire

include 'header.php';


// Variable
echo "Hello fellowship";
echo '<br>';

$ringBearer = "Frodon";
echo $ringBearer;
echo '<br>';
$ringMaker = strtoupper("Sauron");
echo $ringMaker;
echo '<br>';

$ringCompagnyMembers = 9;
$ringOnFinger = true;
$ringBearer = "Sam";
$ringCompagnyMembers += 1;

echo $ringCompagnyMembers;
echo '<br>';
$middleHearth ="";
echo $middleHearth;

// Strings

$txtringBearer = "Le porteur est $ringBearer";

echo "$txtringBearer et $ringMaker le recherche";

$wizard = 'Gandalf';

require 'wizard.php';

include 'footer.php';

echo '<br>' . '<br>'.'<br>' . '<br>';
//===============================================

// PHP BASICS 2;
    // Boucle FOR;

for($i=0;$i<=9;$i++){ 
    echo "$i ";
};
echo '<br>';
for($i=0;$i<=10;$i++){ 
    echo "$i ";
};
echo '<br>'. '<br>';

for($i=1;$i<=10;$i++){ 
    echo "$i ";
};
echo '<br>' . '<br>';

for($i=10;$i>0;$i--){ 
    echo "$i ";
};
echo '<br>' . '<br>';

for($i=25;$i<=50;$i+=5){ 
    echo "$i ";

};
echo '<br>' . '<br>';

for($i=10;$i>=-10;$i-=3){ 
    echo "$i ";

};
echo '<br>' . '<br>' . '<br>' . '<br>';


    //CONDITIONS


    $name = ['Darth Vader', 'Darth Sidious', 'Yoda', ''];
    $caracterName = $name[rand(0,3)];

        if($caracterName == "Darth Vader" || $caracterName == "Darth Sidious") {
            echo "$caracterName est un Sith";
        }

        elseif($caracterName == "Yoda") {
            echo "$caracterName est un Jedi";
        }
        else {
            echo "Sans doute une personne sans pouvoir.";
        }

//============================================================
    // TABLEAU INDEXÉ


 echo '<br>' . '<br>' . '<br>' . '<br>';

    $jedis = ['Yoda', 'Obi-Wan Kenobi', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'];
    var_dump($jedis);
    echo '<br>';
    $jedis[] = "Rey";
    var_dump($jedis);
    echo '<br>' . '<br>';
    echo "$jedis[0] est le plus expérimenté !";
    echo '<br>' . '<br>';

    foreach ($jedis as $k => $v){
        echo "$v est le plus expérimenté !";
        echo "</br>" . "</br>";
    }


//============================================================
    // TABLEAU ASSOCIATIF

    $personnage = [
        'Yoda'  => 900,
        'Leia' => 19,
        'Luke Skywalker' => 19,
        'Darth Vader' => 46,
        'Chewbacca' => 200,
    ];
    
    $personnage['Han Solo'] = 29;
var_dump($personnage);
echo '<br>' . '<br>';

asort($personnage);
var_dump($personnage);
?>

<html>
<table class="table">
  <thead>
    <tr>
      <th scope="col">NOM</th>
      <th scope="col">Âge</th>
    </tr>
  </thead>

  <tbody>
  
<?php

    foreach ($personnage as $key => $v){
        if($v>100) {
        echo '<tr>';
        echo '<td>'.$key.'</td>';
        echo '<td>'.$v.'</td>';
        echo '</tr>';
    }}

?>
  </tbody>
</table>
</html>



 

<?php
echo '<br>' . '<br>' . '<br>' . '<br>';

$raceCaracter = [
    'Jedi' => ['Luke Skywalker', 'Yoda', 'Windu'],
    'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
    'Gungan' => ['Jar Jar Binks'],
    'Human' => ['Han Solo', 'Leia']
];
?>
<html>
<table class="table">
  <thead>
    <tr>
      <th scope="col">RACE</th>
      <th scope="col">Membres</th>
    </tr>
  </thead>

  <tbody>
  
<?php

    foreach ($raceCaracter as $key => $v){
        echo '<tr>';
        echo '<td>'.$key.'</td>';
        echo '<td>'. count($v).'</td>';
        echo '</tr>';
    };

?>
  </tbody>
</table>
</html>
