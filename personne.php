<?php 

require_once("etudiant.php");

class Personne{
    // propriétés 
    public $prenom;
    public $nom;
    public $sexe;

    public function __construct($prenom, $nom, $sexe)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
    }

    // methodes 
    public function afficher(){
        echo "<br>Prenom: ".$this->prenom;
        echo "<br>Nom: ".$this->nom;
        echo "<br>Sexe: ".$this->sexe;
    }
}



$p1 = new Personne("Bassirou", "Niang", "Masculin");

$p2 = new Personne("Fatou", "Faye", "Feminin");

$et1 = new Etudiant("Alioune", "Diallo", "Masculin", "et1234567", "765673737");

// $p3 = new Personne("Modou", "Diallo", "Masculin");

$p1->afficher();
$p2->afficher();
$et1->afficheInfo();