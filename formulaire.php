<?php 
    require_once("header.php");
?>
    <form action="traitement.php" method="GET">
        <label for="">Valeur 1</label><br>
        <input type="number" name="valeur1"  id="valeur1"><br>
        <label for="">Valeur 2</label><br>
        <input type="number"  name="valeur2"><br>
        <label for="">Operateur</label><br>
        <input type="text" name="opt"><br>
        <button type="submit" name="calculer" class="btn" id="calcul">Calculer</button>
    </form>

    <?php 

        // if (isset($_GET["calculer"])) {
        //     extract($_GET);

        //     if ($opt == "+") {
        //         echo "$valeur1 + $valeur2 = ".($valeur1+$valeur2);
        //     }
        // }



    ?>
    <script>
        let valeur1 = document.querySelector("#valeur1");
        let btn = document.querySelector("#calcul");

        // btn.addEventListener("click", function(e){
        //     alert(valeur1.value)

        //     e.preventDefault();
        // })
    </script>
</body>
</html>