<?php
    include('../DB/db_ksiazki.php');
    $baza = new db_ksiazki();
    
    $baza->databaseConnect();
    if(isset($_GET)){
        if(isset($_GET['bookTitle'])){
        $data = $baza->selectKsiazkaByTitle($_GET['bookTitle']);
        }
        else{
            $data = $baza->selectKsiazkaByAktywna();
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
