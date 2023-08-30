<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Détails du disque</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .details-container {
            display: flex;
            align-items: center;
            margin: 10px;
        }
        .image-container {
            flex: 1;
        }
        .details-box {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 10px;
            flex: 2; 
            margin-left: 10px;
            height: 500px
        }
        img {
            max-width: 100%;
            height: auto;
        }
        .details-box p {
            font-size: 70px; 
            margin: 5px 0; 
        }
    </style>
</head>
<body>
    <?php
        $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'admin1234');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $requete = $db->prepare("SELECT * FROM disc WHERE disc_id = ?");
        $requete->execute(array($_GET["disc_id"]));
        $disc = $requete->fetch(PDO::FETCH_OBJ);
    ?>
    <h1>Détails du disque</h1>
    <div class="details-container">
        <div class="image-container">
            <img src="<?= $disc->disc_picture ?>" alt="<?= $disc->disc_title ?>">
        </div>
        <div class="details-box">
            <p><strong>Titre:</strong> <?= $disc->disc_title ?></p>
            <p><strong>Label:</strong> <?= $disc->disc_label ?></p>
            <p><strong>Année:</strong> <?= $disc->disc_year ?></p>
            <p><strong>Genre:</strong> <?= $disc->disc_genre ?></p>
            <p><strong>Prix:</strong> <?= $disc->disc_price ?>€</p>
            <p><strong>Artiste ID:</strong> <?= $disc->artist_id ?></p>
        </div>
    </div>
</body>
</html>