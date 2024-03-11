<!-- search_guests.php -->
<div id="searchGuests" class="search-container">
    <h3>Księga Gości</h3>
    <?php
    include('../DB/db_wpisy_urzytkownika.php');
    $baza = new db_wpisy_urzytkownika();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $id_wpisu_urzytkownika=$_GET['id'];
            $baza->deleteWpisUrzytkownika($id_wpisu_urzytkownika);
        }
        if(isset($_GET['opcja'])){
            if($_GET['opcja'] == 'dodaj'){
                $tytul = $_GET['tytul'];
                $tresc = $_GET['tresc'];
                $autor = $_GET['autor'];
                $baza->insertWpisUrzytkownika($tytul, $tresc, $autor);
            }
        }
    }
    ?>
    <form class="MyForm">
            <input type=text name="tytul" placeholder="tytul" id="tytul" class="tytul"></input>
            <textarea type=text name="tresc" placeholder="tresc" id="tresc" class="tresc"></textarea>
            <input type=text name="autor" placeholder="autor" id="autor" class="autor"></input>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
            <input type="reset"></input>
        </form>
    <!-- księga gości pozwala na umieszczenie na stronie wpisu użytkownika, 
    gdzie formularz zawiera następujące pola: treść wpisu, nick, adres e-mail, poniżej przycisk wyślij i resetuj, 
    po kliknięciu przycisku wyślij treść wpisu nie jest umieszczana natychmiast w księdze gości ale pojawia się w panelu administratora, 
    dopiero administrator zatwierdza dany wpis i dopiero od tego momentu jest on widoczny w księdze gości, 
    administrator posiada dwa przyciski do każdego wpisu o treści “zatwierdź” i “odrzuć”, odrzucenie powoduje wykasowanie wpisu z bazy danych
    tabela uczeń powinna zawierać (id, imię, nazwisko, pesel, email, uwagi) -->
</div>
