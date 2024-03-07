<!-- search_guests.php -->
<div id="searchGuests" class="search-container">
    <h3>Księga Gości</h3>
    <form id="searchGuestsForm">
        <label for="guestName">Imię gościa:</label>
        <input type="text" id="guestName" name="guestName" required>
        <button type="button" onclick="searchGuests()">Szukaj</button>
    </form>
    <div id="searchGuestsResults">
    <!-- księga gości pozwala na umieszczenie na stronie wpisu użytkownika, 
    gdzie formularz zawiera następujące pola: treść wpisu, nick, adres e-mail, poniżej przycisk wyślij i resetuj, 
    po kliknięciu przycisku wyślij treść wpisu nie jest umieszczana natychmiast w księdze gości ale pojawia się w panelu administratora, 
    dopiero administrator zatwierdza dany wpis i dopiero od tego momentu jest on widoczny w księdze gości, 
    administrator posiada dwa przyciski do każdego wpisu o treści “zatwierdź” i “odrzuć”, odrzucenie powoduje wykasowanie wpisu z bazy danych
    tabela uczeń powinna zawierać (id, imię, nazwisko, pesel, email, uwagi) -->
    </div>
</div>