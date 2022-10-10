<?php

// Exo1
$nb1 = 12;
$nb2 = 76;
$nb_result = $nb1 + $nb2;

echo "l’addition du nombre 1 et du nombre 2 est égale à " . $nb_result;
echo "<br>";

// Exo2
$str = "C'est une chaine de caractère"; // String
$nb_int = 46; // Integer
$nb_double = 76.43; // Double ou float
$isTrue = true; // Boolean
$arr = array('Toto', 'Dupont'); // Array
$obj = (object) array('first_name' => 'Toto', 'last_name' => 'Dupont'); // Object
$obj2 = new stdClass(); // Object 2
$null = NULL; // Null
$resource = fopen('http://www.google.com', 'r'); // Resource

// Afficher les types des variables avec gettype()
var_dump(
    gettype($str),
    gettype($nb_int),
    gettype($nb_double),
    gettype($isTrue),
    gettype($arr),
    gettype($obj),
    gettype($obj2),
    gettype($null),
    gettype($resource)
);

// Pour faire suite aux exemples précédents, voici comment intégrer des données dans obj2
$obj2->first_name = 'Toto';
$obj2->last_name = 'Dupont';

// Exo3
$isActive = false;
$gender = 'Troll';

if ($isActive && $gender == 'Troll') {
    echo "Le compte du personnage troll est actif.";
} else {
    echo "Le compte du personnage troll est inactif.";
}

echo "<br>";

// Exo4
$number = 2;

if ( $number % 2 == 0 ) {
    echo "Le chiffre $number est pair.";
} else {
    echo "Le chiffre $number est impair.";
}

echo "<br>";

// Le même exemple avec une condition ternaire :
$other_number = 3;

echo $other_number % 2 == 0 ? "Le chiffre $other_number est pair." : "Le chiffre $other_number est impair.";

echo "<br>";

// Exo5
$multiple = 45;

if ( $multiple % 3 == 0 && $multiple % 5 == 0 ) {
    echo "$multiple est un multiple de 3 et de 5.";
} else {
    echo "$multiple n'est pas un multiple de 3 et de 5.";
}

echo "<br>";

// Exo5
$negative_nb = -174;

echo "La valeur absolue de $negative_nb est " . abs($negative_nb);

echo "<br>";

// Exo6
$days = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday',
    'Sunday'
];

for ($i = 0; $i < count($days); $i++) {
    echo $days[$i] . " = " . date('N', strtotime($days[$i])) . "<br>";
}
