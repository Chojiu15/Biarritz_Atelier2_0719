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

?>