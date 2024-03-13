<!-- search_books.php -->
<?php
        include('../DB/db_ksiazki.php');
        $baza = new db_ksiazki();
        
        $baza->databaseConnect();
        $data = $baza->selectKsiazkaByAktywna();
        if (!empty($data)){
?>
<div id="searchBooks" class="search-container">
    <h3>Wyszukaj Książki</h3>
    <form id="searchBooksForm">
        <label for="bookTitle">Tytuł książki:</label>
        <input type="text" id="bookTitle" name="bookTitle" required>
        <button type="button" onclick="searchBooks()">Szukaj</button>
    </form>
    <div id="searchBooksResults">
        <?php
                while($row = mysqli_fetch_assoc($data))
                {
                    echo "<div id='aktywana_ksiazka'>Tytuł: ".$row['tytul']." Autor: ".$row['autor']." Wydawnictwo: ".$row['wydawnictwo']." Rok wydania: ".$row['rok_wydania']."
                    </div>";
                }
            }else {
                echo "Brak książek";
            }
            $baza->close();
        ?>
    </div>
</div>
