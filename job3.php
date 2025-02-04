<?php

class Point {
    // Déclaration des attributs
    private $x;
    private $y;

    // Constructeur pour initialiser les coordonnées x et y
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    // Méthode pour afficher les coordonnées (x, y)
    public function afficherLesPoints() {
        echo "Les coordonnées du point sont : (" . $this->x . ", " . $this->y . ")<br>";
    }

    // Méthode pour afficher la coordonnée X
    public function afficherX() {
        echo "La coordonnée X est : " . $this->x . "<br>";
    }

    // Méthode pour afficher la coordonnée Y
    public function afficherY() {
        echo "La coordonnée Y est : " . $this->y . "<br>";
    }

    // Méthode pour changer la coordonnée X
    public function changerX($nouvelleX) {
        $this->x = $nouvelleX;
    }

    // Méthode pour changer la coordonnée Y
    public function changerY($nouvelleY) {
        $this->y = $nouvelleY;
    }
}

// Instantiation d'un objet de la classe Point
$point1 = new Point(3, 4);

// Affichage des coordonnées
$point1->afficherLesPoints();  // Les coordonnées du point sont : (3, 4)
$point1->afficherX();          // La coordonnée X est : 3
$point1->afficherY();          // La coordonnée Y est : 4

// Changer les coordonnées
$point1->changerX(7);
$point1->changerY(10);

// Affichage après modification
$point1->afficherLesPoints();  // Les coordonnées du point sont : (7, 10)
$point1->afficherX();          // La coordonnée X est : 7
$point1->afficherY();          // La coordonnée Y est : 10

?>
