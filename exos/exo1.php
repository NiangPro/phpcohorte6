<?php

    $nombre = 6;

    $cpt = 0;
    $som = 0;

    for ($i=1; $i < $nombre; $i++) { 
        if ($nombre % $i == 0) {
            $cpt++;
            $som += $i;
        }
    }

    if ($cpt == 1 || $nombre == 1) {
        echo "$nombre est un nombre premier<br>";
    }else{
        echo "$nombre n'est pas un nombre premier<br>";
    }

    if ($som == $nombre) {
        echo "$nombre est un nombre parfait<br>";
    }else{
        echo "$nombre n'est pas un nombre parfait<br>";
    }