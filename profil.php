<?php 
    require_once("header.php");

?>

<h1>Page profil utilisateur</h1>
<h3>Prenom: <?php echo $_GET["prenom"]; ?></h3>
<h3>Nom: <?= $_GET["nom"]; ?></h3>
<h3>Adresse: <?php echo $_GET["adresse"]; ?></h3>