<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les variables & constantes</title>
</head>
<body>
    
    <h1>Codes de PhP</h1>
    <?php 
        $prenom = "Bassirou";
        $age = 34;
        $decimal = 3.56;
        $valeur1 = 34;
        $valeur2 = 6;


        define("PI", 3.14);

        echo 'Prenom:'. $prenom;
        echo '<br> Age:'. $age.' ans';
        echo '<br> Pi:'. PI;
        echo "<br> Type de prenom:". gettype($prenom);

        unset($prenom);

        if (isset($prenom)) {
            echo "Prenom: $prenom";
        }else{
            echo "La variable Prenom n'existe pas";
        }
        // echo "<br>Prenom: $prenom";


        settype($decimal, "integer");
        echo '<br> Entier:'. $decimal;

        echo "<br> $valeur1 + $valeur2 =".$valeur1+$valeur2;
        echo "<br> $valeur1 - $valeur2 =".$valeur1-$valeur2;
        echo "<br> $valeur1 x $valeur2 =".$valeur1*$valeur2;
        echo "<br> $valeur1 / $valeur2 =".$valeur1/$valeur2;
        echo "<br> $valeur1 % $valeur2 =".$valeur1%$valeur2;

    ?>

    <h1>Codes de Javascript</h1>
    <script>
        let prenom = "Modou";
        let age = 45;

        const PI = 3.14;
        document.write("Prenom: "+prenom);
        document.write(`<br>Age: ${age} ans`);
        document.write(`<br>PI: ${PI}`);
    </script>
</body>
</html>