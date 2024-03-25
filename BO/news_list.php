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
            $article_id=$_GET['id'];
            $baza->deleteArticle($article_id);
        }
        if(isset($_GET['opcja'])){
            if($_GET['opcja'] == 'dodaj'){
                $title = $_GET['title'];
                $text = $_GET['text'];
                $link = $_GET['link'];
                $author = $_GET['author'];
                $baza->insertArticle($title, $text, $link, $author);
            }
            elseif($_GET['opcja'] == 'edytuj'){
                $tytul = $_GET['title'];
                $text = $_GET['text'];
                $link = $_GET['link'];
                $autor = $_GET['author'];
                $article_id = $_GET['article_id'];
                $baza->updateArticle($article_id, $title, $text, $link, $author);
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
                <button class='delete'><a href=news_edit.php?id=".$row['article_id'].">
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
