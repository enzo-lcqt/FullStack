<?php
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'admin1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $db->prepare("SELECT disc.*, artist.artist_name FROM disc
                            JOIN artist ON disc.artist_id = artist.artist_id
                            WHERE disc.disc_id = ?");
    $requete->execute(array($_GET["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_disc'])) {
        // Code de suppression du disque de la base de données
        $deleteQuery = $db->prepare("DELETE FROM disc WHERE disc_id = ?");
        $deleteQuery->execute(array($disc->disc_id));

        // Redirection vers la page index après suppression
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Détails du disque</title>
    <style>
        .details-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        .disc-details {
            flex: 1;
            padding: 20px;
            box-sizing: border-box;
        }
        .disc-details p {
            margin: 0;
        }
        .disc-image {
            padding: 20px;
            box-sizing: border-box;
        }
        .disc-image img {
            max-width: 100%;
            height: auto;
        }
        .btn {
            color: white;
            background-color: blue;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            display: inline-block;
        }
        p {
            font-size: 30px;
            height: 75px
        }
    </style>
</head>
<body>
    <h1>Détails du disque</h1>
    <div class="details-container">
        <div class="disc-image">
            <img src="<?= $disc->disc_picture ?>" alt="<?= $disc->disc_title ?>">
        </div>
        <div class="disc-details">
            <p><strong>Titre:</strong> <?= $disc->disc_title ?></p>
            <p><strong>Label:</strong> <?= $disc->disc_label ?></p>
            <p><strong>Année:</strong> <?= $disc->disc_year ?></p>
            <p><strong>Genre:</strong> <?= $disc->disc_genre ?></p>
            <p><strong>Prix:</strong> <?= $disc->disc_price ?>€</p>
            <p><strong>Artiste:</strong> <?= $disc->artist_name ?></p>
            <a href="edit_form.php?disc_id=<?= $disc->disc_id ?>" class="btn btn-secondary">Modifier</a>
               <form method="post" style="display: inline-block;">
                <input type="hidden" name="disc_id" value="<?= $disc->disc_id ?>">
                <button type="submit" class="btn btn-delete" name="delete_disc" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce disque ?')">Supprimer</button>
            </form>
            <a href="index.php" class="btn">Retour</a>
        </div>
    </div>
</body>
</html>
