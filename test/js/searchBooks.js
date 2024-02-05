// searchBooks.js
function showSearchBooks() {
    hideAllContainers();
    document.getElementById("searchBooks").style.display = "block";
}

function searchBooks() {
    // Logika wyszukiwania książek
    var bookTitle = document.getElementById("bookTitle").value;
    // Wywołaj odpowiednie zapytanie do bazy danych lub inne operacje
    // W tym przykładzie, po prostu wyświetlamy wyniki w divie
    var resultsDiv = document.getElementById("searchBooksResults");
    resultsDiv.innerHTML = "Wyniki wyszukiwania dla: " + bookTitle;
    // ... inne operacje związane z wynikami wyszukiwania
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