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
    ?>
    <!-- księga gości pozwala na umieszczenie na stronie wpisu użytkownika, 
    gdzie formularz zawiera następujące pola: treść wpisu, nick, adres e-mail, poniżej przycisk wyślij i resetuj, 
    po kliknięciu przycisku wyślij treść wpisu nie jest umieszczana natychmiast w księdze gości ale pojawia się w panelu administratora, 
    dopiero administrator zatwierdza dany wpis i dopiero od tego momentu jest on widoczny w księdze gości, 
    administrator posiada dwa przyciski do każdego wpisu o treści “zatwierdź” i “odrzuć”, odrzucenie powoduje wykasowanie wpisu z bazy danych
    tabela uczeń powinna zawierać (id, imię, nazwisko, pesel, email, uwagi) -->
</div>
<?php
    include('end_html.php')
?>