<?php
class Operation {
    private $nombre1;
    private $nombre2;

    // Constructeur pour initialiser les valeurs
    public function __construct($nombre1, $nombre2) {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    // Méthode addition pour additionner les deux nombres
    public function addition() {
        $resultat = $this->nombre1 + $this->nombre2;
        echo "Le résultat de l'addition est : " . $resultat . "\n";
    }
}

// Exemple d'utilisation
$operation = new Operation(5, 7);
$operation->addition();
?>
