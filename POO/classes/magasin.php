<?php
class Magasin {
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;

    public function __construct($nom, $adresse, $codePostal, $ville) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getAdresse() {
        return $this->adresse;
    }

    public function getCodePostal() {
        return $this->codePostal;
    }

    public function getVille() {
        return $this->ville;
    }
}
class Employe {
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaireAnnuel;
    private $service;
    private $magasin;

    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaireAnnuel, $service, $magasin) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaireAnnuel = $salaireAnnuel;
        $this->service = $service;
        $this->magasin = $magasin;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDateEmbauche() {
        return $this->dateEmbauche;
    }

    public function getFonction() {
        return $this->fonction;
    }

    public function getSalaireAnnuel() {
        return $this->salaireAnnuel;
    }

    public function getService() {
        return $this->service;
    }

    public function getMagasin() {
        return $this->magasin;
    }
}


$magasin1 = new Magasin("Afpa", "123 rue amiens", "80000", "Amiens");

// Création d'un employé associé à ce magasin
$employe1 = new Employe("Doe", "John", "2020-11-15", "Ingénieur", 50000, "Développement", $magasin1);

// Pour obtenir le magasin associé à un employé
$magasinDeLEmploye = $employe1->getMagasin();

// Affichage des informations du magasin et de l'employé
echo "4 - L'entreprise est constituée de magasins implantés sur tout le territoire français : <br>";
echo "Nom du magasin : " . $magasinDeLEmploye->getNom() . "<br>";
echo "Adresse du magasin : " . $magasinDeLEmploye->getAdresse() . "<br>";
echo "Code postal du magasin : " . $magasinDeLEmploye->getCodePostal() . "<br>";
echo "Ville du magasin : " . $magasinDeLEmploye->getVille() . "<br>";
echo "Nom de l'employé : " . $employe1->getNom() . "<br>";
echo "Prénom de l'employé : " . $employe1->getPrenom() . "<br>";
echo "Date d'embauche de l'employé : " . $employe1->getDateEmbauche() . "<br>";
echo "Fonction de l'employé : " . $employe1->getFonction() . "<br>";
echo "Salaire annuel de l'employé : " . $employe1->getSalaireAnnuel() . "K euros<br>";
echo "Service de l'employé : " . $employe1->getService() . "<br><br>";

echo "5- Afficher chaque mode de restauration de chaque employé selon le magasin dans lequel il est affecté : ";

?>
