<?php
session_start();
require_once("entete.php"); ?>

<h1>Page d'administrateur</h1>

<h4>Email: <?= $_SESSION["email"] ?></h4>
<h4>Mot de passe: <?= $_SESSION["mdp"] ?></h4>