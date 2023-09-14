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
                        <img src="assets/img/food/sandboeauf.jpeg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">boeuf</h5>
                            <p class="card-text">
                               sandwich a la viande de boeuf
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/sandpoulet.jpg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">poulet</h5>
                            <p class="card-text">
                                sandwich a la viande de poulet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/sandthon.jpg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">thon</h5>
                            <p class="card-text">
                                sandwich au thon
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/sandvegi.jpg" class="card-img-top1 " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">vegie</h5>
                            <p class="card-text">
                            sandwich veggan
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/Food-Name-3631.jpg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">croque monsieur</h5>
                            <p class="card-text">
                            jambon, pain de mie, fromage fondu
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/Carousel/Nous-Contacter.png" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Contact</h5>
                            <p class="card-text">
                                renseignez votre mail...
                            </p>
                            <a class="btn btn-primary" href="contact.php">créer votre compte</a>
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