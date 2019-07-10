<?php 
for ($i=0; $i<10; $i++) {
    echo $i;
}

for ($i=0; $i<=10; $i++) {
    echo $i;
}

for ($i=1; $i<=10; $i++) {
    echo $i;
}
for ($i=10; $i>=0; $i--) {
    echo $i;
}
for ($i=25; $i<=50; $i+=5) {
    echo $i; 
}

 for ($i=10; $i>=-10; $i-=3) {
    echo $i;
}
$name = "Yoda";
if ($name === "Darth Vador" || $name === "Darth Sidious"){
    echo "Sith";

}
elseif ($name === "Yoda"){
    echo "jedi";
}

else {
    echo " Sans doute un personnage sans pouvoir";
}
    

$jedis = ['Yoda', 'Obi-Wan Kenobi', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn' ];
$jedis[] = 'Rey';

echo $jedis[0];
print_r($jedis);


$age = ['yoda'=>900, 'Leia'=>19, 'Luke skywalker'=>19, 'Darth Vader'=>46, 'chewbacca'=>200];
$age['Han Solo']=29 ; 
asort($age);
echo '<br>';
var_dump($age);
?> 
<table class="table">
  <thead>
    <tr>
      <th scope="col">nom</th>
      <th scope="col">age</th>
      </tr>
  </thead>
  <tbody>
  <?php
  foreach($age as $key=>$w){
      if ($w>100){
      echo '<tr>';
      echo '<td>'.$key.'</td>';
      echo '<td>'.$w.'</td>';
      echo '</tr>';  }}
  ?>
  </tbody>
</table>

<?php

$personnages = [
    'jedis' => ['Luke Skywalker', 'yoda', 'windu'],
    'Sith' => ['Darth Vader', 'Darth Maul', 'Dooku'],
    'gungan' => ['jar jar Binks'],
    'Human' => ['Han Solo', 'Leia']
]
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">race</th>
      <th scope="col">nombre</th>
      </tr>
  </thead>
  <tbody>
  <?php
  foreach($personnages as $key=>$value){
     
      echo '<tr>';
      echo '<td>'.$key.'</td>';
      echo '<td>'.count($value).'</td>';
      echo '</tr>';  }
  ?>
  </tbody>
</table>
