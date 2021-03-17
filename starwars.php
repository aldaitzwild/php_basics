<?php

//Boucle for
echo "<h2>Affiche de 0 à 9 inclus via une boucle : </h2>";
echo "<ul>";
for($counter = 0; $counter <= 9; $counter++) {
    echo "<li>$counter</li>";
} 
echo "</ul>";

echo "<h2>Affiche de 0 à 10 inclus via une boucle : </h2>";
echo "<ul>";
for($counter = 0; $counter <= 10; $counter++) {
    echo "<li>$counter</li>";
} 
echo "</ul>";

echo "<h2>Affiche de 1 à 10 inclus via une boucle : </h2>";
echo "<ul>";
for($counter = 1; $counter <= 10; $counter++) {
    echo "<li>$counter</li>";
} 
echo "</ul>";


echo "<h2>Affiche de 10 à 0 inclus via une boucle : </h2>";
echo "<ul>";
for($counter = 10; $counter >= 0; $counter--) {
    echo "<li>$counter</li>";
} 
echo "</ul>";

echo "<h2>Affiche de 25 à 50 inclus, tous les 5 : </h2>";
echo "<ul>";
for($counter = 25; $counter <= 50; $counter += 5) {
    echo "<li>$counter</li>";
} 
echo "</ul>";


echo "<h2>Affiche les valeurs possibles entre 10 à -10, tous les 3 : </h2>";
echo "<ul>";
for($counter = 10; $counter >= -10; $counter -= 3) {
    echo "<li>$counter</li>";
} 
echo "</ul>";


//Conditions
$name = "Yoda";


if ($name == "Darth Vader" || $name == "Darth Sidious") {
    echo "<p>Sith</p>";
} else if ($name == "Yoda") {
    echo "<p>Jedi</p>";
} else {
    echo "<p>Sans doute quelq'un sans pouvoir</p>";
}

//Tableau indéxé

$jedis = ['Obi-Wan Kenobi', 'Yoda', 'Luke Skywalker', 'Windu', 'Qui-gon Jinn'];

$jedis[] = 'Rey';

echo "<p>Le plus vieux jedi : " . $jedis[1] . "</p>";

echo "<ul>";
foreach($jedis as $jedi) {
    echo "<li>$jedi</li>";
}
echo "</ul>";


//Tableau associatif

$heroes = [
    "Yoda" => 900,
    "Leia" => 19,
    "Luke Skywalker" => 19,
    "Darth Vader" => 46,
    "Chewbacca" => 200,
];

$heroes["Han Solo"] = 29;

asort($heroes);


echo "<ul>";
foreach($heroes as $hero => $age) {
    echo "<li>$hero - $age</li>";
}
echo "</ul><br>";

ksort($heroes);

echo "<ul>";
foreach($heroes as $hero => $age) {
    echo "<li>$hero - $age</li>";
}
echo "</ul><br>";



echo "<ul>";
foreach($heroes as $hero => $age) {
    if ($age > 100) {
        echo "<li>$hero - $age</li>";
    }
}
echo "</ul><br>";


//Tableau Multidimensionnels


$personnages = [
    "Jedi" => ["Luke Skywalker", "Yoda", "Windu"],
    "Sith" => ["Darth Vader", "Darth Maul", "Dooku"],
    "Gungan" => ["Jar Jar Binks"],
    "Human" => ["Han Solo", "Leia"],
];

foreach($personnages as $categorie => $liste) {
    echo "<h2>$categorie</h2>";

    echo "<ul>";
    foreach($liste as $nom) {
        echo "<li>$nom</li>";
    }
    echo "</ul>";
}


foreach($personnages as $categorie => $liste) {
    echo "<h2>$categorie : " . count($liste) . "</h2>";

}

