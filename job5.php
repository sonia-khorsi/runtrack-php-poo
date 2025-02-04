<?php

class Personnage {
    // Déclaration des attributs
    private $x;
    private $y;

    // Constructeur qui initialise la position du personnage
    public function __construct($x, $y) {
        $this->x = $x;  // Position horizontale
        $this->y = $y;  // Position verticale
    }

    // Méthode pour déplacer le personnage vers la gauche
    public function gauche() {
        $this->x--;  // Diminue la coordonnée x (déplacement à gauche)
    }

    // Méthode pour déplacer le personnage vers la droite
    public function droite() {
        $this->x++;  // Augmente la coordonnée x (déplacement à droite)
    }

    // Méthode pour déplacer le personnage vers le bas
    public function bas() {
        $this->y++;  // Augmente la coordonnée y (déplacement vers le bas)
    }

    // Méthode pour déplacer le personnage vers le haut
    public function haut() {
        $this->y--;  // Diminue la coordonnée y (déplacement vers le haut)
    }

    // Méthode pour afficher la position actuelle du personnage
    public function position() {
        echo "Position du personnage : x = " . $this->x . ", y = " . $this->y . "<br>";
    }
}

// Exemple d'utilisation de la classe Personnage
$personnage = new Personnage(5, 5);  // Initialisation de la position (5, 5)

// Affichage de la position initiale
$personnage->position();  // Position du personnage : x = 5, y = 5

// Déplacements
$personnage->gauche();  // Déplacement vers la gauche
$personnage->droite();  // Déplacement vers la droite
$personnage->haut();    // Déplacement vers le haut
$personnage->bas();     // Déplacement vers le bas

// Affichage de la nouvelle position après les déplacements
$personnage->position();  // Position du personnage : x = 5, y = 5 (en fonction des déplacements)

// Résultat final après plusieurs déplacements

?>
