<?php
include'header.php';
echo ' Hello followship'."<br>";

$pda = 'Frodon';
echo $pda."<br>";

$ca = 'Sauron';
echo $ca."<br>";

$coma = '9';


echo $coma."<br>";

$ring_finger = true;
echo $ring_finger."<br>";

$new_pda = 'Gollum';
echo $new_pda.' est le nouveau porteur'."<br>";

$new_member = $coma+1;
echo $new_member."<br>";

$middleEarth ='';

echo 'Le porteur est '.$pda."<br>";

$ndp = 'nom du porteur '.$pda;
echo $ndp.' et '.$ca.' le recherche'."<br>";

$caMaj = strtoupper($ca);
echo $caMaj."<br>";

$ca = $caMaj;
echo $ca."<br>";
include 'footer.php';
$wizard = 'Gandalf';
require 'wizard.php';
echo '<br>';
for ($i = 0; $i <= 9; $i++) {
    echo $i;
}
echo '<br>';
for ($i = 0; $i <= 10; $i++) {
    echo $i;
}
echo '<br>';
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
echo '<br>';
for($i=10;$i>=1;$i--){
    echo $i;
}
echo '<br>';
for ($i=25; $i <= 50; $i+=5) {
    echo $i;
   }
   echo '<br>';
for($i=10; $i>=-10; $i-=3){
    echo $i;
}
echo '<br>';

$name = ['Darth Vader', 'Darth sidious', 'Yoda',''];
$aleatoryName = $name[rand(0,3)]; 

echo $aleatoryName.'<br>';

if ($aleatoryName == 'Darth Vader'|| $aleatoryName == 'Darth sidious'){
    echo 'Sith';
} 
elseif ($aleatoryName == $name[2]) {
    echo 'Jedi';
} 

else {
    echo $aleatoryName.'<br>';
   echo 'sans doute une personne sans pouvoir';   
}
echo '<br>';
$jedis = ['yoda','Obi-wan-kenobi','Luke Skywalker','Windu','Qui-gon Jinn'];
array_push($jedis, 'Rey');
echo $jedis[0];
echo '<br>';
foreach ($jedis as $key => $value) {
    echo $value . "<br/ >\n";}

$tableAge = ['Yoda'=> 900,'Leia'=> 19, 'Luke Skywalker'=> 19,'Darth Vader'=> 46,'Chewbacca'=> 200];
$tableAge['Han Solo']=26;
var_dump($tableAge);
asort($tableAge);
echo '<br>';
echo '<ul>';
foreach ($tableAge as $key => $value) {
    echo '<li>'.$key . $value. '</li>';}
echo '<br>';
Ksort($tableAge);
echo '<ul>';
foreach ($tableAge as $key => $value) {
    echo '<li>'.$key . $value. '</i>';}
echo '<hr>';   
foreach ($tableAge as $key => $value) {
    if($value > 100)
        echo '<li>'.$key . $value. '</li>';}  

$tableRace = ['Jedi'=> ['Luke Skywalker' , 'Yoda' , 'Windu'] ,
 'Sith'=> ['Darth Vader', 'Darth Maul', 'Dooku'],
 'Gungan'=> ['Jar Jar Binks'],
 'Human'=> ['Han Solo', 'Leia'],];

echo '<ul>';
foreach ($tableRace as $key => $value) {
    foreach ($value as $nextKey => $nextValue){
        echo '<h2>'.$key.'</h2>'.'<ul>'.'<li>'.$nextValue.'</li>'.'</ul>';}
    }
    echo '<ul>';
    foreach ($tableRace as $key => $value) {
        echo '<h2>'.$key.'</h2>'.'<ul>'.'<li>'.count($value).'</li>'.'</ul>';}
?>
