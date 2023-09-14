<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="/assets/css/plats.css" />
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		
</head>
<body>
<?php
include('assets/exo_php/header.php')
?>
    
     <section class="cc-menu merriweather py-5"> 
        <div class="container">
          <div class="row">
            <h3 class="text-center text-light merriweather">Nos plats</h3>
          </div>
          <br /><br /><br />
          <h3 class="text-center text-light merriweather">Burgers</h3>
          <div class="row">
            <!-- Première ligne -->
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/hamburger.jpg" class="card-img-top" alt="hamburger" style="height: 223px;">
                <h3>Hamburger</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(1)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/cheesburger.jpg" class="card-img-top" alt="cheeseburger" style="height: 223px;">
                <h3>cheeseburger</h3>
                <p>description</p>
                <p>Prix : 8.00€</p>
                <button onclick="ajouterAuPanier(2)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/Food-Name-433.jpeg" class="card-img-top" alt="double_steack">
                <h3>double steack</h3>
                <p>description</p>
                <p>Prix : 6.00€</p>
                <button onclick="ajouterAuPanier(3)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/Food-Name-6340.jpg" class="card-img-top" alt="big">
                <h3>Big burger</h3>
                <p>description</p>
                <p>Prix : 12.00€</p>
                <button onclick="ajouterAuPanier(4)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/burger_cat.jpg" class="card-img-top" alt="classic" style="height: 223px;">
                <h3>Classic</h3>
                <p>description</p>
                <p>Prix : 5.00€</p>
                <button onclick="ajouterAuPanier(5)">Ajouter</button>
              </div>
            </div>
          </div>

          <!-- Deuxième ligne -->
          <br><br><br>
          <h3 class="text-center text-light merriweather">Pizzas</h3>
          <div class="row">
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/Food-Name-8298.jpg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>vegie</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(6)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/pizza-au-chorizo.jpg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>chorizo</h3>
                <p>description</p>
                <p>Prix : 12.00€</p>
                <button onclick="ajouterAuPanier(7)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/pizza-margherita.jpg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>margherita</h3>
                <p>description</p>
                <p>Prix : 12.00€</p>
                <button onclick="ajouterAuPanier(8)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/pizza-salmon.png" class="card-img-top" alt="..." >
                <h3>saumon</h3>
                <p>description</p>
                <p>Prix : 12.00€</p>
                <button onclick="ajouterAuPanier(9)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/pizzatar.jpg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>tartiflette</h3>
                <p>description</p>
                <p>Prix : 12.00€</p>
                <button onclick="ajouterAuPanier(10)">Ajouter</button>
              </div>
            </div>
          </div>

          <!-- troiseme ligne -->
          <br><br><br>
          <h3 class="text-center text-light merriweather">Pâtes</h3>
          <div class="row">
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/chinese.png" class="card-img-top" alt="..." style="height: 223px;">
                <h3>ramens</h3>
                <p>description</p>
                <p>Prix : 9.00€</p>
                <button onclick="ajouterAuPanier(11)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/pates-a-la-carbonara.jpeg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>carbonara</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(12)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/spaghetti-legumes.jpg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>spaghetti</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(13)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/shutterstoc.png" class="card-img-top" alt="..." style="height: 223px;">
                <h3>truffes</h3>
                <p>description</p>
                <p>Prix : 12.00€</p>
                <button onclick="ajouterAuPanier(14)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/tagliatelle.png" class="card-img-top" alt="..." style="height: 223px;">
                <h3>tagliatelle</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(15)">Ajouter</button>
              </div>
            </div>
          </div>

          <!-- quatrieme ligne -->
          <br><br><br>
          <h3 class="text-center text-light merriweather">Asiatique</h3>
          <div class="row">
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/nems.png" class="card-img-top" alt="..." style="height: 223px;">
                <h3>nems</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(16)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/mer.png" class="card-img-top" alt="..." style="height: 223px;">
                <h3>fruits de mer</h3>
                <p>description</p>
                <p>Prix : 15.00€</p>
                <button onclick="ajouterAuPanier(17)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/porcara.png" class="card-img-top" alt="..." style="height: 223px;">
                <h3>porc caramel</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(18)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/sushis.png" class="card-img-top" alt="..." style="height: 223px;">
                <h3>sushis</h3>
                <p>description</p>
                <p>Prix : 30.00€</p>
                <button onclick="ajouterAuPanier(19)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/asiatvegi.png" class="card-img-top" alt="..." style="height: 223px;">
                <h3>plats vegie</h3>
                <p>description</p>
                <p>Prix : 5.00€</p>
                <button onclick="ajouterAuPanier(20)">Ajouter</button>
              </div>
            </div>
          </div>

          <!-- cinquieme ligne -->
          <br><br><br>
          <h3 class="text-center text-light merriweather">Wraps</h3>
          <div class="row">
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/boeuf.jpg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>wrap boeuf</h3>
                <p>description</p>
                <p>Prix : 8.00€</p>
                <button onclick="ajouterAuPanier(21)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/composer.jpg" class="card-img-top" alt="..." style="height: 190px;">
                <h3>wrap a composer</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(22)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/Food-Name-3461.jpg" class="card-img-top" alt="...">
                <h3>wrap poulet</h3>
                <p>description</p>
                <p>Prix : 8.00€</p>
                <button onclick="ajouterAuPanier(23)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/poisson.jpg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>wrap poisson</h3>
                <p>description</p>
                <p>Prix : 8.00€</p>
                <button onclick="ajouterAuPanier(24)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/vegie.png" class="card-img-top" alt="..." style="height: 223px;">
                <h3>wrap vegie</h3>
                <p>description</p>
                <p>Prix : 6.00€</p>
                <button onclick="ajouterAuPanier(25)">Ajouter</button>
              </div>
            </div>
          </div>

          <!-- sixieme ligne -->
          <br><br><br>
          <h3 class="text-center text-light merriweather">Sandwichs</h3>
          <div class="row">
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/sandboeauf.jpeg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>sand boeuf</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(26)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/sandpoulet.jpg" class="card-img-top" alt="..." style="height: 223px;">
                <h3>sand poulet</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(27)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/sandthon.jpg" class="card-img-top" alt="...">
                <h3>sand thon</h3>
                <p>description</p>
                <p>Prix : 10.00€</p>
                <button onclick="ajouterAuPanier(28)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/sandvegi.jpg" class="card-img-top" alt="...">
                <h3>sand vegie</h3>
                <p>description</p>
                <p>Prix : 5.00€</p>
                <button onclick="ajouterAuPanier(29)">Ajouter</button>
              </div>
            </div>
            <div class="col mb-4">
              <div class="card" style="width: 14rem;">
                <img src="assets/img/food/Food-Name-3631.jpg" class="card-img-top" alt="..." style="height: 190px;">
                <h3>croque monsieur</h3>
                <p>description</p>
                <p>Prix : 5.00€</p>
                <button onclick="ajouterAuPanier(30)">Ajouter</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      
      
      <br><br>

      <script>
        function ajouterAuPanier(idProduit) {
    var produit = {
      image: "",
      nom: "",
      description: "",
      prix: 0
    };

    if (idProduit === 1) {
      produit.image = "assets/img/food/hamburger.jpg"
      produit.nom = "Hamburger";
      produit.description = "burger avec tomates et salade";
      produit.prix = 10.00;
    } else if (idProduit === 2) {
        produit.image = "assets/img/food/cheesburger.jpg"
      produit.nom = "cheeseburger";
      produit.description = "cheeseburger avec son cheddar fondu";
      produit.prix = 8.00;
    } else if (idProduit === 3) {
        produit.image = "assets/img/food/Food-Name-433.jpeg"
      produit.nom = "double steack";
      produit.description = "burger avec ces 2 steacks";
      produit.prix = 6.00;
    } else if (idProduit === 4) {
        produit.image = "assets/img/food/Food-Name-6340.jpg"
      produit.nom = "Big burger";
      produit.description = "big burger avec son steack de 300g";
      produit.prix = 12.00;
    }else if (idProduit === 5) {
        produit.image = "assets/img/food/burger_cat.jpg"
      produit.nom = "Classic";
      produit.description = "petit burger pour les petits apétit";
      produit.prix = 5.00;
    }else if (idProduit === 6) {
        produit.image = "assets/img/food/Food-Name-8298.jpg"
      produit.nom = "vegie";
      produit.description = "pizza vegie";
      produit.prix = 10.00;
    } else if (idProduit === 7) {
        produit.image = "assets/img/food/pizza-au-chorizo.jpg"
      produit.nom = "chorizo";
      produit.description = "pizza avec ces chorizos";
      produit.prix = 12.00;
    } else if (idProduit === 8) {
        produit.image = "assets/img/food/pizza-margherita.jpg"
      produit.nom = "margherita";
      produit.description = "garnie de tomates, de mozzarella, de basilic frais, de sel et d'huile d'olive.";
      produit.prix = 12.00;
    }else if (idProduit === 9) {
        produit.image = "assets/img/food/pizza-salmon.png"
      produit.nom = "saumon";
      produit.description = "saumon, crème, citron, basilic frais";
      produit.prix = 12.00;
    }else if (idProduit === 10) {
        produit.image = "assets/img/food/pizzatar.jpg"
      produit.nom = "tartiflette";
      produit.description = "lardons, oignon, creme fraiche, reblochon, poivre, persil, pomme de terre, champignon";
      produit.prix = 12.00;
    } else if (idProduit === 11) {
        produit.image = "assets/img/food/chinese.png"
      produit.nom = "ramens";
      produit.description = "pâte spécialité asiatique";
      produit.prix = 9.00;
    } else if (idProduit === 12) {
        produit.image = "assets/img/food/pates-a-la-carbonara.jpeg"
      produit.nom = "carbonara";
      produit.description = "pâtes avec du pecorino râpé, jaune d'œuf, du poivre noir et du guanciale";
      produit.prix = 10.00;
    }else if (idProduit === 13) {
        produit.image = "assets/img/food/spaghetti-legumes.jpg"
      produit.nom = "spaghetti";
      produit.description = "Spaghettis, Viande de boeuf hachée, tomate pelée, oignon, ail, thym, laurier, huile d'olive";
      produit.prix = 10.00;
    }else if (idProduit === 14) {
        produit.image = "assets/img/food/shutterstoc.png"
      produit.nom = "truffes";
      produit.description = "truffe, beurre, creme liquide, echalote, tagliatelle";
      produit.prix = 12.00;
    } else if (idProduit === 15) {
        produit.image = "assets/img/food/tagliatelle.png"
      produit.nom = "tagliatelle";
      produit.description = "tagliatelle, persil, émincés de poulet";
      produit.prix = 10.00;
    } else if (idProduit === 16) {
        produit.image = "assets/img/food/nems.png"
      produit.nom = "nems";
      produit.description = "poulet/porc/poisson";
      produit.prix = 10.00;
    }else if (idProduit === 17) {
        produit.image = "assets/img/food/mer.png"
      produit.nom = "fruits de mer";
      produit.description = "beignet de calamar, crevette, citron, tomate cerise";
      produit.prix = 15.00;
    }else if (idProduit === 18) {
        produit.image = "assets/img/food/porcara.png"
      produit.nom = "porc caramel";
      produit.description = "émincés de porc cuit dans du caramel";
      produit.prix = 10.00;
    } else if (idProduit === 19) {
        produit.image = "assets/img/food/sushis.png"
      produit.nom = "sushis";
      produit.description = "riz, saumon, algue, avocat,";
      produit.prix = 30.00;
    } else if (idProduit === 20) {
        produit.image = "assets/img/food/asiatvegi.png"
      produit.nom = "plats vegie";
      produit.description = "plats asiatique veggan";
      produit.prix = 5.00;
    }else if (idProduit === 21) {
        produit.image = "assets/img/food/boeuf.jpg"
      produit.nom = "wrap boeuf";
      produit.description = "wrap a la viande de boeuf";
      produit.prix = 8.00;
    }else if (idProduit === 22) {
        produit.image = "assets/img/food/composer.jpg"
      produit.nom = "wrap a composer";
      produit.description = "wrap a composer soit meme";
      produit.prix = 10.00;
    } else if (idProduit === 23) {
        produit.image = "assets/img/food/Food-Name-3461.jpg"
      produit.nom = "wrap poulet";
      produit.description = "wrap a la viande de poulet";
      produit.prix = 8.00;
    } else if (idProduit === 24) {
        produit.image = "assets/img/food/poisson.jpg"
      produit.nom = "wrap poisson";
      produit.description = "wrap au poisson";
      produit.prix = 8.00;
    }else if (idProduit === 25) {
        produit.image = "assets/img/food/vegie.png"
      produit.nom = "wrap vegie";
      produit.description = "wrap veggan";
      produit.prix = 6.00;
    }else if (idProduit === 26) {
        produit.image = "assets/img/food/sandboeauf.jpeg"
      produit.nom = "sand boeuf";
      produit.description = "sandwich a la viande de boeuf";
      produit.prix = 10.00;
    } else if (idProduit === 27) {
        produit.image = "assets/img/food/sandpoulet.jpg"
      produit.nom = "sand poulet";
      produit.description = "sandwich a la viande de poulet";
      produit.prix = 10.00;
    } else if (idProduit === 28) {
        produit.image = "assets/img/food/sandthon.jpg"
      produit.nom = "sand thon";
      produit.description = "sandwich au thon";
      produit.prix = 10.00;
    }else if (idProduit === 29) {
        produit.image = "assets/img/food/sandvegi.jpg"
      produit.nom = "sand vegie";
      produit.description = "sandwich veggan";
      produit.prix = 5.00;
    }else if (idProduit === 30) {
        produit.image = "assets/img/food/Food-Name-3631.jpg"
      produit.nom = "croque monsieur";
      produit.description = "jambon, pain de mie, fromage fondu";
      produit.prix = 5.00;
    } 

    var panier = JSON.parse(sessionStorage.getItem("panier")) || [];
    panier.push(produit);
    sessionStorage.setItem("panier", JSON.stringify(panier));

  }

  function afficherPanier() {
    window.location.href = "/panier.php";
    console.log("je suis bien entré ici");
    
  }
      </script>


		<script src="assets/js/bootstrap.bundle.min.js"></script>

    <br><br>
    
    <?php
include('assets/exo_php/footer.php')
?>

</body>
</html>