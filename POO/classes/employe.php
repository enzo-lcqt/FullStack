<?php

class Employe {
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaireAnnuel;
    private $service;

    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaireAnnuel, $service) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaireAnnuel = $salaireAnnuel;
        $this->service = $service;
    }

    // Méthode pour calculer depuis combien d'années l'employé est dans l'entreprise
    public function anneesDansEntreprise() {
        // Obtenez la date actuelle
        $dateActuelle = new DateTime();
        
        // Convertissez la date d'embauche en objet DateTime
        $dateEmbauche = new DateTime($this->dateEmbauche);

        // Calculez la différence entre les deux dates en années
        $difference = $dateActuelle->diff($dateEmbauche);
        return $difference->y;
    }

    // Méthodes d'accès pour les propriétés
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
}

$employe = new Employe("toto", "tutu", "2022-09-04", "Président", 500, "commercial");

$anneesDansEntreprise = $employe->anneesDansEntreprise();

echo "Nom de l'employé : " . $employe->getNom() . "<br>";
echo "Prénom de l'employé : " . $employe->getPrenom() . "<br>";
echo "Date d'embauche de l'employé : " . $employe->getDateEmbauche() . "<br>";
echo "Fonction de l'employé : " . $employe->getFonction() . "<br>";
echo "Salaire annuel de l'employé : " . $employe->getSalaireAnnuel() . "K euros<br>";
echo "Service de l'employé : " . $employe->getService() . "<br>";
echo "Années dans l'entreprise : " . $anneesDansEntreprise . " ans<br>";


?>