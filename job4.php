<?php

class Animal {
    // Déclaration des attributs
    private $age;
    private $prenom;

    // Constructeur pour initialiser les attributs
    public function __construct() {
        $this->age = 0;         // L'âge initial de l'animal est 0
        $this->prenom = '';     // Le prénom est initialisé à une chaîne vide
    }

    // Méthode pour faire vieillir l'animal
    public function vieillir() {
        $this->age++;  // Ajoute 1 à l'âge de l'animal
    }

    // Méthode pour obtenir l'âge de l'animal
    public function afficherAge() {
        echo "L'animal a " . $this->age . " ans.<br>";
    }
}

// Instantiation d'un objet de la classe Animal
$animal1 = new Animal();

// Affichage de l'âge initial de l'animal
$animal1->afficherAge();  // L'animal a 0 ans.

// Faire vieillir l'animal
$animal1->vieillir();     // Vieillir une fois
$animal1->vieillir();     // Vieillir une autre fois

// Affichage de l'âge après avoir vieilli l'animal
$animal1->afficherAge();  // L'animal a 2 ans.

?>
