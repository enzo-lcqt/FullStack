<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'admin1234');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $disc_title = $_POST['disc_title'];
    $disc_year = $_POST['disc_year'];
    $disc_label = $_POST['disc_label'];
    $disc_genre = $_POST['disc_genre'];
    $disc_price = $_POST['disc_price'];
    $artist_id = $_POST['artist_id'];

    $uploaded_file = $_FILES['disc_picture']['tmp_name'];
    $target_dir = 'uploads/';
    $target_file = $target_dir . basename($_FILES['disc_picture']['name']);

    if (move_uploaded_file($uploaded_file, $target_file)) {
        $requete = $db->prepare("INSERT INTO disc (disc_title, disc_year, disc_label, disc_genre, disc_price, artist_id, disc_picture) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $requete->execute([$disc_title, $disc_year, $disc_label, $disc_genre, $disc_price, $artist_id, $target_file]);
    }

    header("Location: index.php"); // Redirection vers la page de liste
} else {
    echo "Méthode non autorisée.";
}
?>
