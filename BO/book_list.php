<?php
include('./head_admin.php');
?>
    <div class="panel_lewy">
    <a class="przycisk" href="./admin_panel.php"><i class="fa-solid fa-house" style="color: #fff;"></i> Strona główna</a>
    <a class="przycisk" href="./book_add.php"><i class="fa-solid fa-book-open" style="color: #fff;"></i> Dodaj książkę</a>
    </div>

    <?php
    include('../DB/db_book.php');
    $baza = new db_book();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $idbook=$_GET['id'];
            $baza->deleteBookByID($idbook);
        }
        if(isset($_GET['opcja'])){
            if($_GET['opcja'] == 'dodaj'){
                $title = $_GET['title'];
                $author = $_GET['author'];
                $publisher = $_GET['publisher'];
                $publishYear = $_GET['publishYear'];
                $isbn = $_GET['isbn'];
                $active = 0;
                if(isset($_GET['active'])){
                   $active = 1;
                }
                $comment = $_GET['comment'];
                $baza->insertBook($title, $author, $publisher, $publishYear, $isbn, $active, $comment);
            }
            elseif($_GET['opcja'] == 'edytuj'){
                $title = $_GET['title'];
                $author = $_GET['author'];
                $publisher = $_GET['publisher'];
                $publishYear = $_GET['publishYear'];
                $isbn = $_GET['isbn'];
                $active = 0;
                if(isset($_GET['active'])){
                   $active = 1;
                }
                $comment = $_GET['comment'];
                $idbook = $_GET['idbook'];
                $baza->updateBookByID($idbook, $title, $author, $publisher, $publishYear, $isbn, $active, $comment);
            }
        }
        else{
            echo "<p>Książki nie ma w naszej bazie</p>";
        }
    }
    
    $baza->databaseConnect();
    $data = $baza->selectBookAll();
    if (!empty($data)){
    
    ?>
    <div class="wpisy">
        <?php
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='wpis' class='artykul'>Tytuł: ".$row['title']." Autor: ".$row['author']." publisher: ".$row['publisher']." Rok wydania: ".$row['publishYear']." ISBN: ".$row['isbn']." active: ".$row['active']." comment: ".$row['comments']."
                <button class='delete'><a href=book_list.php?del=True&id=".$row['id_book'].">
                Usuń książke
                </a></button>
                <button class='delete'><a href=book_edit.php?id=".$row['id_book'].">
                Edytuj książke
                </a></button>
                </div>";
            }
            } else {
                echo "Brak książek";
            }
            $baza->close();
        ?>
    </div>
</body>
</html>
