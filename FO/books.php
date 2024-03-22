<?php
    include('../DB/db_book.php');
    $baza = new db_book();
    
    $baza->databaseConnect();
    if(isset($_GET)){
        if(isset($_GET['bookTitle'])){
        $data = $baza->selectBookBy($_GET['bookTitle']);
        }
        else{
            $data = $baza->selectBookByActive();
        }
    }
    if (!empty($data)){
        ?>
        <div id="searchBooks">
            <h3>Wyszukaj Książki</h3>
            <form id="searchBooksForm" action="./index.php" method = "get">
                <label for="bookTitle">Tytuł książki:</label>
                <input type="text" id="bookTitle" name="bookTitle" required></input>
                <input type=hidden name="id" id="id" class="id" value='searchBooks'></input>
                <input type="submit" value="Szukaj"></input>
            </form>
            <div id="searchBooksResults">
                <?php
                        while($row = mysqli_fetch_assoc($data))
                        {
                            echo "<div id='aktywana_ksiazka'>Tytuł: ".$row['title']." Autor: ".$row['author']." Wydawnictwo: ".$row['publisher']." Rok wydania: ".$row['publishYear']."
                            </div>";
                        }
                    }else {
                        echo "Brak książek";
                    }
                    $baza->close();
                ?>
            </div>
        </div> 
