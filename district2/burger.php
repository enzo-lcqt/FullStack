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
                        <img src="assets/img/food/Food-Name-6340.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">Big</h5>
                            <p class="card-text">
                                un énorme steack haché, une rondelle de cornichon, du bacon et du cheddar fondant
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/Food-Name-433.jpeg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">double steack</h5>
                            <p class="card-text">
                                deux steack haché, une rondelle de cornichon, des oignons , des rondelles de tomates et du cheddar fondant
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/burger_cat.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">classic</h5>
                            <p class="card-text">
                                un steack haché, une rondelle de cornichon , des rondelles de tomates, et du cheddar fondant
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/hamburger.jpg" class="card-img-top3 " alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">hamburger</h5>
                            <p class="card-text">
                                un steack haché, une rondelle de cornichon, des oignons , des rondelles de tomates, du bacon et du cheddar fondant
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/cheesburger.jpg" class="card-img-top3" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">cheeseburger</h5>
                            <p class="card-text">
                                un steack haché, une rondelle de cornichon, des oignons , du bacon et du cheddar fondant
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card zoom-effect">
                        <img src="assets/img/food/pizza-au-chorizo.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <h5 class="card-title">pizza</h5>
                            <p class="card-text">
                                saumon, tartiflette, chorizo...
                            </p>
                            <a class="btn btn-primary" href="pizza.php">Passer au pizza</a>
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
        <script src="assets/js/burger.js"></script>
</body>
</html>