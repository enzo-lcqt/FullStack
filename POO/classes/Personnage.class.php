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
$personnage1 = new Personnage("Doe", "John", 30, "Homme");
$personnage2 = new Personnage("Smith", "Jane", 25, "Femme");

// Accès aux attributs en utilisant les accesseurs
echo "Nom du personnage 1 : " . $personnage1->getNom() . "\n";
echo "<br>";
echo "Prénom du personnage 2 : " . $personnage2->getPrenom() . "\n";
echo "<br>";
echo "Âge du personnage 1 : " . $personnage1->getAge() . "\n";
echo "<br>";
echo "Sexe du personnage 2 : " . $personnage2->getSexe() . "\n";
?>