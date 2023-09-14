<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/plats.css" />

        <style>
            .zoom-effect {
  transition: transform 0.3s ease;
}

.zoom-effect:hover {
  transform: scale(1.1);
}
        </style>
</head>
<body>
<?php
include('assets/exo_php/header.php')
?>
    
    <section class="cc-menu merriweather py-5">
        <div class="container">
            <div class="row">
                <h3 class="text-center text-light merriweather">Nos variétés</h3>
            </div>
            <br><br><br>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/chinese.png" class="card-img-top2" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">ramens</h5>
                            <p class="card-text">
                            pâte spécialité asiatique
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/tagliatelle.png" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">tagliatelle</h5>
                            <p class="card-text">
                            tagliatelle, persil, émincés de poulet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/pates-a-la-carbonara.jpeg" class="card-img-top2" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">carbonara</h5>
                            <p class="card-text">
                            âtes avec du pecorino râpé, jaune d'œuf, et du guanciale
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/spaghetti-legumes.jpg" class="card-img-top1 " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">spaghetti</h5>
                            <p class="card-text">
                            Spaghettis, Viande de boeuf hachée, tomate pelée, oignon,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/shutterstoc.png" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">truffes</h5>
                            <p class="card-text">
                            truffe, beurre, creme liquide, echalote, tagliatelle
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/porcara.png" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">asiat</h5>
                            <p class="card-text">
                                porc caramel, nems, sushis...
                            </p>
                            <a class="btn btn-primary" href="asiat.php">Passer a l'asiat</a>
                        </div>
                    </div>
                </div>            
            </div>
        </div>
    </section>
  
    <br><br>
    <?php
include('assets/exo_php/footer.php')
?>


		<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>