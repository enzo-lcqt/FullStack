<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    	<!-- Font awesome cdn CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<!-- Bootstrap core CSS -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/assets/css/commande.css" />
		<script src="https://kit.fontawesome.com/88b3df3889.js" crossorigin="anonymous"></script>
    <style>
        #panier-liste {
          list-style-type: none;
          padding-left: 0;
        }
        #panier-liste img {
          width: 200px;
          height: 150px;
        }
      </style>
</head>
    <body>

        <?php
include('assets/exo_php/header.php')
?>

<section class="cc-menu merriweather py-5 centered-form"> 
<br><br><br><br><br><br><br>
            <div class="text-center" >
                <h1>Mon Panier</h1>
        
                <h2>Produits sélectionnés :</h2>
                <ul  id="panier-liste"></ul>
        
                <h2>Prix total :</h2>
                <p id="prix-total"></p>
                <button onclick="resetPanier()">Réinitialiser</button>
                <button onclick="finaliser()">finaliser commande</button>
            </div>
            <script>
                function resetPanier() {
                    // Supprimer les données du sessionStorage
                    sessionStorage.removeItem("panier");
                    sessionStorage.removeItem("prixTotal");
        
                    // Rediriger vers la page principale
                    window.location.href = "plats.php";
                }
        
                document.addEventListener("DOMContentLoaded", function () {
                    // Récupérer les données du sessionStorage
                    var panier = JSON.parse(sessionStorage.getItem("panier")) || [];
        
                    // Calculer le prix total
                    var prixTotal = 0;
                    panier.forEach(function (produit) {
                        prixTotal += produit.prix;
                    });
        
                    // Enregistrer le prix total dans le sessionStorage
                    sessionStorage.setItem("prixTotal", prixTotal);
        
                    // Afficher les produits sélectionnés
                    var panierListe = document.getElementById("panier-liste");
                    panier.forEach(function (produit) {
                        var li = document.createElement("li");
        
                        var img = document.createElement("img");
                        img.src = produit.image;
                        img.alt = "Produit";
                        li.appendChild(img);
        
                        var div = document.createElement("div");
        
                        var h3 = document.createElement("h3");
                        h3.textContent = produit.nom;
                        div.appendChild(h3);
        
                        var pDesc = document.createElement("p");
                        pDesc.textContent = produit.description;
                        div.appendChild(pDesc);
        
                        var pPrix = document.createElement("p");
                        pPrix.textContent = "Prix : " + produit.prix + "€";
                        div.appendChild(pPrix);

                        var hr = document.createElement("hr");

                        pPrix.insertAdjacentElement("afterend", hr);
                        
                        li.appendChild(div);
                        panierListe.appendChild(li);
                        
                    });
        
                    // Afficher le prix total
                    var prixTotalElement = document.getElementById("prix-total");
                    prixTotalElement.textContent = "Prix total : " + prixTotal.toFixed(2) + "€";
                });


                function finaliser(){
                    window.location.href = "formulaire_commande.php"
                }
            </script>

</section>

<br><br>
    <?php
include('assets/exo_php/footer.php')
?>
</body>
</html>