<?php 


$matrice = [
    [23, 67, 0, 10],
    [3, 67, 10, -20],
    [29, 7, 30, -10],
    [7, -34, 90, 10],
    [77, -304, 90, 10],
    [7, -34, 80, 30],
];

for ($i=0; $i < count($matrice); $i++) { 
    sort($matrice[$i]);
}

for ($i=0; $i < count($matrice); $i++) { 
    for ($j=0; $j < count($matrice[$i]); $j++) { 
        echo $matrice[$i][$j]." ";
    }
    echo "<br>";
}