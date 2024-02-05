// adminPanel.js
function showAdminPanel() {
    hideAllContainers();
    document.getElementById("adminPanel").style.display = "block";
}

function loginAdmin() {
    // Logika logowania do panelu administracyjnego
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    // Wywołaj odpowiednie zapytanie do bazy danych lub inne operacje
    // W tym przykładzie, po prostu wyświetlamy komunikat o sukcesie lub niepowodzeniu
    alert("Logowanie jako " + username + " - Sukces!");
    // ... inne operacje związane z panelem administracyjnym
}
