<div id="contactInfo" class="contact-container">
<?php
    include('../DB/db_artykuly.php');
    $baza = new db_artykuly();
    
    $baza->databaseConnect();
    $data = $baza->selectArtykul();
    
    $counter = 0; // Licznik artykułów wyświetlonych
    if (mysqli_num_rows($data) > 0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
            echo "<div id='wpis' class='artykul'>
                    <section class='gorny_panel_wpisu'>
                        <p>Tytuł:".$row['title']."</p>
                        <p>Data dodania: ".$row['data']."</p>
                    </section>
                    <article>
                        <p>Treść:</p>
                        ".substr($row['tresc'],0,150)." ...
                        <a href='./index.php?id=article&id_article=".$row['artykul_id']."'>Więcej</a>
                    </article>
            </div>";
            $counter++;
            if ($counter >= 4) {
                break; // Przerwij pętlę po wyświetleniu 5 artykułów
            }
        }
    }
    $baza->close();
?>
</div>