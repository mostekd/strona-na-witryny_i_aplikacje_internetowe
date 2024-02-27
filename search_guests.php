<!-- search_guests.php -->
<div id="searchGuests" class="search-container">
    <h3>Księga Gości</h3>
    <form id="searchGuestsForm">
        <label for="guestName">Imię gościa:</label>
        <input type="text" id="guestName" name="guestName" required>
        <button type="button" onclick="searchGuests()">Szukaj</button>
    </form>
    <div id="searchGuestsResults"></div>
</div>
