<?php 

class Etudiant extends Personne{
    public $matricule;
    public $tel;

    public function __construct($prenom, $nom, $sexe, $matricule, $tel)
    {
        // $this->prenom = $prenom;
        // $this->nom = $nom;
        // $this->sexe = $sexe;

        parent::__construct($prenom, $nom, $sexe);
        $this->matricule = $matricule;
        $this->tel = $tel;
    }

    public function afficheInfo(){
        $this->afficher();
        echo "<br>Matricule: ".$this->matricule;
        echo "<br>Telephone: ".$this->tel; 
    }
}