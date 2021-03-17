<?php

$newLine = "<br>" ;

include("header.php");
echo $newLine;



echo "Hello fellowship !$newLine";

$ringBearer = 'Frodo';

echo $ringBearer;
echo "$newLine";

$ringMaker = 'Sauron';

echo $ringMaker;
echo $newLine;

$fellowshipMembers = 9;

$isRingBeared;

$ringBearer = 'Sam';
echo $ringBearer;
echo "$newLine";


$fellowshipMembers++;
echo $fellowshipMembers;
echo "$newLine";

$middleEarth = "";

echo $middleEarth;
echo "$newLine";

echo "le porteur est " . $ringBearer;
echo "$newLine";

$nextSentence = "L'anneau est porté par $ringBearer$newLine"; 

echo $nextSentence;

$ringMaker = strtoupper($ringMaker);

echo $ringMaker ;
echo "$newLine";

$wizard = 'Gandalf !!';

require("wizard.php");

$wizard = 'Merlin ...';

require("wizard.php");



echo "$newLine";
echo "$newLine";

include("footer.php");
