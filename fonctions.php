<?php 


    function somme($a, $b){
        echo "$a + $b = ".($a+$b)."<br>";
    }


    somme(4, 6);
    somme(40, 6);
    somme(4, 60);
    somme(7, 6);

    // EXO: 
    // Ecrire une fonction permet de calculer la moyenne
    //  des valeurs d'un tableau

    function moyenne($tab)
    {
        $som = 0;
        foreach ($tab as $val) {
            $som += $val;
        }

        echo "La moyenne des valeur est de :".($som/count($tab));
    }

$tab = [23, 4, 6];
    moyenne($tab);