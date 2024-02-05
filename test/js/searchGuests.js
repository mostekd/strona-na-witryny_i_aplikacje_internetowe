// searchGuests.js
function showSearchGuests() {
    hideAllContainers();
    document.getElementById("searchGuests").style.display = "block";
}

function searchGuests() {
    // Logika wyszukiwania gości
    var guestName = document.getElementById("guestName").value;
    // Wywołaj odpowiednie zapytanie do bazy danych lub inne operacje
    // W tym przykładzie, po prostu wyświetlamy wyniki w divie
    var resultsDiv = document.getElementById("searchGuestsResults");
    resultsDiv.innerHTML = "Wyniki wyszukiwania dla: " + guestName;
    // ... inne operacje związane z wynikami wyszukiwania
}
