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
                        <img src="assets/img/food/pizza-au-chorizo.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">chorizo</h5>
                            <p class="card-text">
                            pizza avec ces chorizos
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/pizza-margherita.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">margherita</h5>
                            <p class="card-text">
                            garnie de tomates, de mozzarella, de basilic frais, de sel
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/pizza-salmon.png" class="card-img-top2" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">saumon</h5>
                            <p class="card-text">
                            saumon, crème, citron, basilic frais
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/pizzatar.jpg" class="card-img-top1 " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">tartiflette</h5>
                            <p class="card-text">
                            lardons, oignon, creme fraiche, reblochon, pomme de terre,
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/Food-Name-8298.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">vegie</h5>
                            <p class="card-text">
                                pizza vegie
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/pates-a-la-carbonara.jpeg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">pâtes</h5>
                            <p class="card-text">
                                saumon, carbonara, truffes...
                            </p>
                            <a class="btn btn-primary" href="pate.php">Passer au pâtes</a>
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