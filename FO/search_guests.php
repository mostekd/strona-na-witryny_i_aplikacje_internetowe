<?php
include('./header.php');
?>
<!-- search_guests.php -->
<div id="searchGuests" class="search-container">
    <h3>Księga Gości</h3>
    <a class="przycisk" href="./dodaj_wpis.php">Dodaj wpis</a>
    <?php
        include('../DB/db_wpisy_uzytkownika.php');
        $baza = new db_wpisy_uzytkownika();
        $baza->databaseConnect();

        $data = $baza->selectWpisByAktywna();
        if (!empty($data)){
                while($row = mysqli_fetch_assoc($data))
                {
                    echo "<div id='aktywany_wpis'>Tytuł: ".$row['tytul']." Tresc: ".$row['tresc']." Autor: ".$row['autor']." Data dodania: ".$row['data']."
                    </div>";
                }
            }else {
                echo "<br><br>Brak Wpisów";
            }
            $baza->close();
        ?>
</div>
<?php
    include('end_html.php')
?>