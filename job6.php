<?php

class Cercle {
    // Déclaration de l'attribut rayon
    private $rayon;

    // Constructeur qui initialise le rayon
    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    // Méthode pour changer le rayon
    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    // Méthode pour afficher toutes les informations du cercle
    public function afficherInfos() {
        echo "Rayon du cercle : " . $this->rayon . "<br>";
        echo "Diamètre du cercle : " . $this->diametre() . "<br>";
        echo "Circonférence du cercle : " . $this->circonférence() . "<br>";
        echo "Aire du cercle : " . $this->aire() . "<br>";
    }

    // Méthode pour calculer la circonférence
    public function circonférence() {
        return 2 * pi() * $this->rayon;  // Formule : C = 2 * π * r
    }

    // Méthode pour calculer l'aire
    public function aire() {
        return pi() * pow($this->rayon, 2);  // Formule : A = π * r²
    }

    // Méthode pour calculer le diamètre
    public function diametre() {
        return 2 * $this->rayon;  // Formule : D = 2 * r
    }
}

// Création de deux cercles avec des rayons de 4 et 7
$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

// Affichage des informations du cercle 1
echo "<h3>Informations sur le cercle 1 :</h3>";
$cercle1->afficherInfos();
echo "<br>";

// Affichage des informations du cercle 2
echo "<h3>Informations sur le cercle 2 :</h3>";
$cercle2->afficherInfos();

?>
