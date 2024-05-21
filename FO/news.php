<div id="contactInfo" class="contact-container">
<?php
    include('../DB/db_article.php');
    $baza = new db_article();
    
    $baza->databaseConnect();
    $data = $baza->selectArticle();
    
    $counter = 0; // Licznik artykułów wyświetlonych
    if (mysqli_num_rows($data) > 0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
            echo "<div id='wpis' class='artykul'>
                    <section class='gorny_panel_wpisu'>
                        <p>Tytuł: ".$row['title']."</p>
                        <p>Data dodania: ".$row['data']."</p>
                    </section>
                    <article>
                        <p>Treść: </p>
                       <p> ".substr($row['text'],0,150)." ... </p>
                        <a href='./index.php?id=article&id_article=".$row['article_id']."'>Więcej</a>
                    </article>
            </div>";
            $counter++;
            if ($counter >= 3) {
                break; // Przerwij pętlę po wyświetleniu 4 artykułów
            }
        }
    }
    $baza->close();
?>
<a href="index.php?id=news_all" id="news_all">Pokaż wszystkie wpisy</a>
</div>