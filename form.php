<?php
if(isset($_POST["envoyer"])) {
    // $prenom = $_POST["prenom"];
    // $nom = $_POST["nom"];
    // $adresse = $_POST["adresse"];
    extract($_POST);


    if (!empty($prenom) && !empty($nom) && !empty($adresse)) {
        header("Location:profil.php?prenom=$prenom&nom=$nom&adresse=$adresse");
    }else{
        header("Location: exo3.php");
    }

    echo "Bonjour $prenom $nom, vous habitez à $adresse";
}