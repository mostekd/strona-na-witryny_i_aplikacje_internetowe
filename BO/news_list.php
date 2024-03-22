<?php
include('./head_admin.php');
?>
    <div class="panel_lewy">
        <a class="przycisk" href="./admin_panel.php"><i class="fa-solid fa-house" style="color: #fff;"></i> Strona główna</a>
        <a class="przycisk" href="./dodaj_wpis.php"><i class="fa-solid fa-book-open" style="color: #ffffff;"></i> Dodaj wpis</a>
    </div>

    <?php
    include('../DB/db_article.php');
    $baza = new db_article();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $artykul_id=$_GET['id'];
            $baza->deleteArtykul($artykul_id);
        }
        if(isset($_GET['opcja'])){
            if($_GET['opcja'] == 'dodaj'){
                $tytul = $_GET['tytul'];
                $text = $_GET['text'];
                $link = $_GET['link'];
                $autor = $_GET['autor'];
                $baza->insertArtykul($tytul, $text, $link, $autor);
            }
            elseif($_GET['opcja'] == 'edytuj'){
                $tytul = $_GET['tytul'];
                $text = $_GET['text'];
                $link = $_GET['link'];
                $autor = $_GET['autor'];
                $article_id = $_GET['article_id'];
                $baza->updateArtykul($article_id, $tytul, $text, $link, $autor);
            }
        }
        else{
            echo "<p>Wpisu nie ma w naszej bazie</p>";
        }
    }
    
    $baza->databaseConnect();
    $data = $baza->selectArticle();
    if (!empty($data)){
    
    ?>
    <div class="wpisy">
        <?php
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='wpis' class='artykul'><a href='news_list.php?id=".$row['article_id']."'>Tytuł: ".$row['title']."</a><article>Treść:".substr($row['text'],0,150)." ...</article>
                <button class='delete'><a href=news_list.php?del=True&id=".$row['article_id'].">
                Usuń wpis
                </a></button>
                <button class='delete'><a href=edytuj_wpis.php?id=".$row['article_id'].">
                Edytuj wpis
                </a></button>
                </div>";
            }
            } else {
                echo "Brak artykułów";
            }
            $baza->close();
        ?>
    </div>
</body>
</html>
