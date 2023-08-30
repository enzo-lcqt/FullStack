<?php
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'admin1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $db->query("SELECT * FROM disc");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Liste des disques</title>
    <style>
        .disc-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .disc {
            width: 48%; /* 48% to leave some space between the columns */
            display: flex;
            margin-bottom: 20px;
        }
        .disc-image {
            width: 30%;
            padding: 10px;
            box-sizing: border-box;
        }
        .disc-image img {
            max-width: 100%;
            height: auto;
        }
        .disc-details {
            width: 70%;
            padding: 10px;
            box-sizing: border-box;
        }
        .btn {
            color: white;
            background-color: blue;
        }
        .fixed-button {
            position: fixed;
            bottom: 20px;
            left: 45%;
            transform: translateX(-50%);
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="disc-container">
        <?php foreach ($tableau as $disc): ?>
            <div class="disc">
                <div class="disc-image">
                    <img src="<?= $disc->disc_picture ?>" alt="<?= $disc->disc_title ?>">
                </div>
                <div class="disc-details">
                    <h2><?= $disc->disc_title ?></h2>
                    <p><strong>Label:</strong> <?= $disc->disc_label ?></p>
                    <p><strong>Genre:</strong> <?= $disc->disc_genre ?></p>
                    <p><strong>Year:</strong> <?= $disc->disc_year ?></p>
                    <a href="details_disc.php?disc_id=<?= $disc->disc_id ?>"style="text-decoration: none;" class="btn btn-primary">Détails</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="add_form.php" class="fixed-button">Ajouter un disque</a>
</body>
</html>
