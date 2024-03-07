<?php
$host = "localhost"; // Host bazy danych
$dbname = "wiai"; // Nazwa bazy danych
$username = "root"; // Nazwa użytkownika bazy danych
$password = ""; // Hasło użytkownika bazy danych


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $bookTitle = $_POST["bookTitle"];

    $query = "SELECT * FROM Books WHERE title LIKE :bookTitle";
    $stmt = $pdo->prepare($query);
    $stmt->bindValue(":bookTitle", "%$bookTitle%", PDO::PARAM_STR);
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Wyświetlenie wyników wyszukiwania
    echo '<ul>';
    foreach ($results as $result) {
        echo '<li>' . $result['title'] . ' - ' . $result['author'] . '</li>';
    }
    echo '</ul>';
}
?>

<!-- search_books.php -->
<div id="searchBooks" class="search-container">
    <h3>Wyszukaj Książki</h3>
    <form id="searchBooksForm">
        <label for="bookTitle">Tytuł książki:</label>
        <input type="text" id="bookTitle" name="bookTitle" required>
        <button type="button" onclick="searchBooks()">Szukaj</button>
    </form>
    <div id="searchBooksResults">
        
    </div>
</div>
