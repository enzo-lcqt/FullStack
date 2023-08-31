<?php
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'admin1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $disc_id = $_POST['disc_id'];
    $disc_title = $_POST['disc_title'];
    $disc_label = $_POST['disc_label'];
    $disc_year = $_POST['disc_year'];
    $disc_genre = $_POST['disc_genre'];
    $disc_price = $_POST['disc_price'];
    $artist_id = $_POST['artist_id'];

    $requete = $db->prepare("UPDATE disc SET disc_title=?, disc_label=?, disc_year=?, disc_genre=?, disc_price=?, artist_id=? WHERE disc_id=?");
    $requete->execute(array($disc_title, $disc_label, $disc_year, $disc_genre, $disc_price, $artist_id, $disc_id));

    header("Location: details_disc.php?disc_id=$disc_id");
?>
