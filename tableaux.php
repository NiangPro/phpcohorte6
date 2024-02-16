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
        $entiers = [34, 0, -5, 12];

        array_push($tab, "doudou");
        $tab[] = "Alimatou";

        array_unshift($tab, "Sokhna");

        array_pop($tab);
        array_shift($tab);

        echo $tab[0];
        echo "<br> Taille: ".count($tab);
        echo "<br> Dernier element: ".$tab[count($tab) - 1];

        for($i = 0; $i < count($tab); $i++){
            echo $tab[$i]." * ";
        }

        foreach($tab as $key =>$val){
            echo "<br> $key => $val";
        }

        sort($entiers);
        // rsort($entiers);

        

        foreach($entiers as $key =>$val){
            echo "<br> $key => $val";
        }

        $mat = [
            [12, 7, 6],
            [-4, 0, 11],
            [100, -10, 5],
        ];

        echo "<table border='1'>";
        for ($i=0; $i <count($mat) ; $i++) { 
            echo "<tr>";
            for ($j=0; $j <count($mat[$i]) ; $j++) { 
                echo  "<td>".$mat[$i][$j]. "</td>";
            }
            echo "<tr>";
        }
        echo "</table>";

        $person = [
            "prenom" => "Bassirou",
            "nom" => "Niang",
            "age" => 35,
        ];

        echo "Prenom: ".$person["prenom"]."<br>";
        echo "Nom: ".$person["nom"]."<br>";
        echo "Age: ".$person["age"]."<br>";

    ?>
    <h1>Les tableaux en javascript</h1>

    <script>
        let tab = new Array("Modou", "Penda", "ALioune");
        let entiers = [23, 34, 56, 89];

        entiers.push(100);
        tab.unshift("Alassane");

        tab.pop();
        tab.shift();

        document.write(tab[0]);
        document.write("<br>"+tab.length);
        document.write("<br>"+tab[tab.length - 1]);
        document.write("<br>"+entiers);

        for(let i = 0; i < tab.length; i++){
            document.write(tab[i]+" * ")
        }

        tab.forEach(function (val, indice){
            document.write(indice+" => "+val+" - ")
        })

        let mat = [
            [12, 7, 6],
            [-4, 0, 11],
            [100, -10, 5],
        ];
        
        document.write("<table border='1'>");
        for (let i=0; i <mat.length ; i++) { 
            document.write("<tr>");
            for (let j=0; j <mat[i].length ; j++) { 
                document.write("<td>"+mat[i][j]+"</td>");
            }
            document.write("<tr>");
        }
        document.write("</table>");
    </script>
</body>
</html>