<?php
require 'Personnage.php'; // Incluez le fichier contenant la classe Personnage
echo"<br>";

$p = new Personnage("Lebowski", "Jeff", 0, ""); // Les valeurs "0" et "" sont utilisées pour l'âge et le sexe par défaut

echo "Nom : " . $p->getNom() . "\n";
echo "<br>";
echo "Prénom : " . $p->getPrenom() . "\n";
?>
