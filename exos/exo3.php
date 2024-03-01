<?php 

$_tab = [
    "prenom" => "bassirou",
    "nom" => "Goudiaby",
    "age" => 34
];


$cpt = 0;
$voyelles = ["a", "e", "i", "u", "o", "y"];

for ($i=0; $i < strlen($_tab["nom"]); $i++) { 
    if (in_array($_tab["nom"][$i], $voyelles)) {
        $cpt++;
    }
}

echo $_tab["nom"].' comporte '.$cpt.' voyelle(s)<br>';

if ($_tab["age"] % 2 == 0) {
    echo $_tab["age"].' est un nombre pair<br>';
}else{
    echo $_tab["age"].' est impair<br>';
}

extract($_tab);
echo "Prenom: $prenom";