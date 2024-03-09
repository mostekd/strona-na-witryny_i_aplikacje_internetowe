<!-- search_books.php -->
<div id="searchBooks" class="search-container">
    <h3>Wyszukaj Książki</h3>
    <form id="searchBooksForm">
        <label for="bookTitle">Tytuł książki:</label>
        <input type="text" id="bookTitle" name="bookTitle" required>
        <button type="button" onclick="searchBooks()">Szukaj</button>
    </form>
    <div id="searchBooksResults">
    <?php
        include('../DB/db_ksiazki.php');
        $baza = new db_ksiazki();
        
        $baza->databaseConnect();
        $data = $baza->selectKsiazkaByAktywna($aktywna);


    ?>
    </div>
</div>
