<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les chaines de caracteres en php</title>
</head>
<body>
    <h1>Les chaines de caracteres en php</h1>
    <?php 
        $chaine = " ma chaine de caracteres ";
        $ss = substr($chaine, 0, 10);
        

        echo "Taille:".strlen($chaine);
        echo "<br>".$chaine[0];
        echo "<br>".strtoupper($chaine);
        echo "<br>".strtolower($chaine);
        echo "<br>".ucwords($chaine);
        echo "<br>".ucfirst($chaine);
        echo "<br>".str_word_count($chaine);
        echo "<br>".strlen(trim($chaine));
        echo "<br>".$ss;
    ?>

    <h1>Les chaines de caracteres en javascript</h1>
    <script>
        let chaine = " Ma chaine de caracteres ";
        
        document.write(`La taille: ${chaine.length}`);
        document.write(`<br>${chaine[0]}`);
        document.write(`<br>${chaine.toUpperCase()}`);
        document.write(`<br>${chaine.toLowerCase()}`);
        document.write(`<br>${chaine.trim().length}`);
        let ss = chaine.substr(0, 10);
        document.write(`<br>${ss}`);
    </script>
</body>
</html>