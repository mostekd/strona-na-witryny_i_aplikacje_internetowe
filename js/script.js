// common.js
function hideAllContainers() {
    document.getElementById("searchBooks").style.display = "none";
    document.getElementById("searchGuests").style.display = "none";
    document.getElementById("contactInfo").style.display = "none";
    // Dodaj kolejne linie w razie dodania nowych kontenerów
}

// searchBooks.js
function showSearchBooks() {
    hideAllContainers();
    document.getElementById("searchBooks").style.display = "block";
}

function searchBooks() {
    var bookTitle = document.getElementById("bookTitle").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("searchBooksResults").innerHTML = xhr.responseText;
        }
    };

    xhr.open("POST", "search_books.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("bookTitle=" + bookTitle);
}

// searchGuests.js
function showSearchGuests() {
    hideAllContainers();
    document.getElementById("searchGuests").style.display = "block";
}

function searchGuests() {
    var guestName = document.getElementById("guestName").value;
    var resultsDiv = document.getElementById("searchGuestsResults");
    resultsDiv.innerHTML = "Wyniki wyszukiwania dla: " + guestName;
}

// contactInfo.js
function showContactInfo() {
    hideAllContainers();
    document.getElementById("contactInfo").style.display = "block";
}

// menu.js
function openNav() {
    document.getElementById("myNav").style.width = "15%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

// adminPanel.js
function showLoginPage() {
    hideAllContainers();
    document.getElementById("loginPage").style.display = "block";
}

function loginAdmin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    alert("Logowanie jako " + username + " - Sukces!");
}