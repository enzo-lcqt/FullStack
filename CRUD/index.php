<?php
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'admin1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $requete = $db->query("SELECT * FROM disc");
    $tableau = $requete->fetchAll(PDO::FETCH_OBJ);
    $requete->closeCursor();
    $count = count($tableau); // Compter le nombre de disques
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
            height: 300px;
            width: 300px
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
        .btn-details {
            color: white;
            background-color: blue;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            margin-right: 10px;
            display: inline-block;
        }
    </style> 
</head>
<body>
    <h1>Liste des disques (<?= $count ?>)</h1>
   
    
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
                    <a href="details_disc.php?disc_id=<?= $disc->disc_id ?>" style="text-decoration: none;" class="btn-details">Détails</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <a href="add_form.php" style="text-decoration: none;" class="fixed-button">Ajouter un disque</a>

    <script>
        const editButtons = document.querySelectorAll('.edit-button');
        const editForms = document.querySelectorAll('.edit-form');

        editButtons.forEach((button, index) => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                editForms[index].submit();
            });
        });
    </script>
</body>
</html>
