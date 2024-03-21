
<div id="searchGuests" class="search-container">
    <h3>Księga Gości</h3>
    <a class="przycisk" href="./index.php?id=addGuestbookEntry">Dodaj wpis</a>
    <?php
        include('../DB/db_guestbook.php');
        $baza = new db_guestbook();
        $baza->databaseConnect();

       if(isset($_GET)){
            if(isset($_GET['option'])){
                if($_GET['option'] == "addGuestbookEntry"){
                    $author = $_GET['author'];
                    $text = $_GET['text'];
                    $title = $_GET['title'];
                    $baza->insertGuestbook($title, $text, $author);
                }
            }
        }

        $data = $baza->selectGuestbookActive();
        if (!empty($data)){
                while($row = mysqli_fetch_assoc($data))
                {
                    echo "<div id='aktywany_wpis'>Tytuł: ".$row['tytul']." Tresc: ".$row['tresc']." Autor: ".$row['autor']." Data dodania: ".$row['data']."</div>";
                }
            }else {
                echo "<br><br>Brak Wpisów";
            }
            $baza->close();
        ?>
</div>
