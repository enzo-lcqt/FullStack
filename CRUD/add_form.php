<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ajouter un disque</title>
</head>
<body>
    <h1>Ajouter un disque</h1>
    <form action="add_script.php" method="post" enctype="multipart/form-data">
        <label for="disc_title">Titre du disque:</label>
        <input type="text" name="disc_title" id="disc_title" ><br><br>

        <label for="disc_year">Année:</label>
        <input type="text" name="disc_year" id="disc_year" ><br><br>

        <label for="disc_label">Label:</label>
        <input type="text" name="disc_label" id="disc_label" ><br><br>

        <label for="disc_genre">Genre:</label>
        <input type="text" name="disc_genre" id="disc_genre" ><br><br>

        <label for="disc_price">Prix:</label>
        <input type="text" name="disc_price" id="disc_price" ><br><br>

        <label for="artist_id">Artiste:</label>
        <select name="artist_id" id="artist_id">
            <?php
            $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'admin1234');
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $requete = $db->query("SELECT * FROM artist");
            while ($artist = $requete->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='" . $artist['artist_id'] . "'>" . $artist['artist_name'] . "</option>";
            }
            ?>
        </select><br><br>

        <label for="disc_picture">Image du disque:</label><br><br>
        <input type="file" name="disc_picture" id="disc_picture"><br><br>

        <input type="submit" value="Ajouter">
        <input  href="index.php" type="submit" value="retour">
    </form>
</body>
</html>
