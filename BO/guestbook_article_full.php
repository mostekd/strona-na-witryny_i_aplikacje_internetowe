<div id="contactInfo" class="contact-container">
<?php
include('../DB/db_guestbook.php');
$baza = new db_guestbook();
$baza->databaseConnect();

$id_guestbook = isset($_GET['id_guestbook']) ? $_GET['id_guestbook'] : null;

if($id_guestbook !== null) {
    $data = $baza->selectGuestbookByID($id_guestbook);
    if($data) {
        while($row = mysqli_fetch_assoc($data)) {
            echo "<div class='artykul_full'>Tytuł: ".$row['title']."<br>Data: ".$row['data']."<article><p>Treść:</p>".$row['text']."</article><br>Autor: ".$row['author']."</div>";
        }
    } else {
        echo "Guestbook entry not found.";
    }
} else {
    echo "No guestbook ID provided.";
}

$baza->close();
?>
</div>