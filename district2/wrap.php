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
                        <img src="assets/img/food/boeuf.jpg" class="card-img-top3" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">boeuf</h5>
                            <p class="card-text">
                                wrap a la viande de boeuf
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/Food-Name-3461.jpg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">poulet</h5>
                            <p class="card-text">
                                wrap a la viande de poulet
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/poisson.jpg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">poisson</h5>
                            <p class="card-text">
                                wrap au poisson
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/composer.jpg" class="card-img-top1 " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">a composer</h5>
                            <p class="card-text">
                               wrap a composer soit meme
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/vegie.png" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">vegie</h5>
                            <p class="card-text">
                               wrap vegie
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/sandboeauf.jpeg" class="card-img-top1" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">sandwich</h5>
                            <p class="card-text">
                                poulet, boeuf, thon...
                            </p>
                            <a class="btn btn-primary" href="sandwich.php">Passer au sandwich</a>
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