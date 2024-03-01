<?php 
echo "<pre>";
print_r($_GET);

extract($_GET);

if(($valeur1+$valeur2) > 30){
    header("Location: profil.php");
}else if ($opt == "+") {
    echo "$valeur1 + $valeur2 = ".($valeur1+$valeur2);
}


echo "</pre>";
