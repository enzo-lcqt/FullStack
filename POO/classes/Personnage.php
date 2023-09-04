<?php
class Personnage {
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    public function __construct($nom, $prenom, $age, $sexe) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->sexe = $sexe;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getAge() {
        return $this->age;
    }

    public function getSexe() {
        return $this->sexe;
    }
}

// Exemple d'utilisation de la classe Personnage
$personnage = new Personnage("Doe", "John", 30, "Homme");

// Accès aux attributs en utilisant les accesseurs
echo "Nom du personnage 1 : " . $personnage->getNom() . "\n";
echo "<br>";
echo "Prénom du personnage 2 : " . $personnage->getPrenom() . "\n";
echo "<br>";
echo "Âge du personnage 1 : " . $personnage->getAge() . "\n";
echo "<br>";
echo "Sexe du personnage 2 : " . $personnage->getSexe() . "\n";
?>