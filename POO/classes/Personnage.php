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
echo "Nom du personnage : " . $personnage->getNom() . "<br>";
echo "Prénom du personnage : " . $personnage->getPrenom() . "<br>";
echo "Âge du personnage : " . $personnage->getAge() . "<br>";
echo "Sexe du personnage : " . $personnage->getSexe() . "<br>";
?>


