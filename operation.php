<?php
// Définition de la classe Operation
class Operation {
    // Les deux nombres (attributs)
    public $nombre1;
    public $nombre2;

    // Constructeur avec valeurs par défaut
    public function __construct($num1 = 5, $num2 = 10) {
        $this->nombre1 = $num1;
        $this->nombre2 = $num2;
    }
}

// Création d'une instance (objet)
$monOperation = new Operation();

// Affichage des valeurs
echo "Nombre 1 : " . $monOperation->nombre1 . "<br>";
echo "Nombre 2 : " . $monOperation->nombre2;
?>