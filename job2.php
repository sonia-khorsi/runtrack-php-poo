<?php

class Personne {
    // Déclaration des attributs
    private $nom;
    private $prenom;

    // Constructeur pour initialiser les attributs
    public function __construct($nom, $prenom) {
        $this->nom = $nom;
        $this->prenom = $prenom;
    }

    // Méthode pour se présenter
    public function SePresenter() {
        return "Je m'appelle " . $this->prenom . " " . $this->nom . ".";
    }
}

// Instantiation de plusieurs objets Personne
$personne1 = new Personne("Dupont", "Pierre");
$personne2 = new Personne("Durand", "Sophie");
$personne3 = new Personne("Martin", "Claude");

// Appel de la méthode SePresenter
echo $personne1->SePresenter() . "<br>";  // Je m'appelle Pierre Dupont.
echo $personne2->SePresenter() . "<br>";  // Je m'appelle Sophie Durand.
echo $personne3->SePresenter() . "<br>";  // Je m'appelle Claude Martin.

?>
