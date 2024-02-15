<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableaux</title>
</head>
<body>
    <h1>Les tableaux en php</h1>
    <?php 
        $tab = ["Bassirou", "Diegane", "Maimouna"];

        echo $tab[0];
        echo "<br> Taille: ".count($tab);
        echo "<br> Dernier element: ".$tab[count($tab) - 1];

    ?>
    <h1>Les tableaux en javascript</h1>

    <script>
        let tab = new Array("Modou", "Penda", "ALioune");
        let entiers = [23, 34, 56, 89];

        entiers.push(100);

        document.write(tab[0]);
        document.write("<br>"+tab.length);
        document.write("<br>"+tab[tab.length - 1]);

        
    </script>
</body>
</html>