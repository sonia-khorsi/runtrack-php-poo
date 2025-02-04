<?php

class Produit {
    // Attributs du produit
    private $nom;
    private $prixHT;
    private $TVA;

    // Constructeur pour initialiser les valeurs du produit
    public function __construct($nom, $prixHT, $TVA) {
        $this->nom = $nom;
        $this->prixHT = $prixHT;
        $this->TVA = $TVA;
    }

    // Méthode pour calculer le prix TTC
    public function calculerPrixTTC() {
        return $this->prixHT * (1 + $this->TVA / 100);  // Prix TTC = Prix HT * (1 + TVA/100)
    }

    // Méthode pour afficher les informations du produit
    public function afficher() {
        return "Nom: " . $this->nom . "\n" .
               "Prix HT: " . $this->prixHT . "€\n" .
               "TVA: " . $this->TVA . "%\n" .
               "Prix TTC: " . $this->calculerPrixTTC() . "€\n";
    }

    // Méthode pour modifier le nom du produit
    public function modifierNom($nouveauNom) {
        $this->nom = $nouveauNom;
    }

    // Méthode pour modifier le prix du produit
    public function modifierPrix($nouveauPrixHT) {
        $this->prixHT = $nouveauPrixHT;
    }

    // Méthode pour retourner le nom du produit
    public function getNom() {
        return $this->nom;
    }

    // Méthode pour retourner le prix HT du produit
    public function getPrixHT() {
        return $this->prixHT;
    }

    // Méthode pour retourner la TVA du produit
    public function getTVA() {
        return $this->TVA;
    }

    // Méthode pour retourner le prix TTC du produit
    public function getPrixTTC() {
        return $this->calculerPrixTTC();
    }
}

// Création de plusieurs produits
$produit1 = new Produit("Produit A", 100, 20);
$produit2 = new Produit("Produit B", 200, 5);
$produit3 = new Produit("Produit C", 50, 10);

// Affichage des informations initiales des produits
echo "Produit 1 - Informations : \n" . $produit1->afficher();
echo "\nProduit 2 - Informations : \n" . $produit2->afficher();
echo "\nProduit 3 - Informations : \n" . $produit3->afficher();

// Modification du nom et du prix des produits
$produit1->modifierNom("Produit X");
$produit1->modifierPrix(120);

$produit2->modifierNom("Produit Y");
$produit2->modifierPrix(250);

$produit3->modifierNom("Produit Z");
$produit3->modifierPrix(60);

// Affichage des informations après modification
echo "\nProduit 1 - Informations après modification : \n" . $produit1->afficher();
echo "\nProduit 2 - Informations après modification : \n" . $produit2->afficher();
echo "\nProduit 3 - Informations après modification : \n" . $produit3->afficher();

?>
