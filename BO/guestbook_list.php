<?php
include('./head_admin.php');
?>
    <div class="panel_lewy">
        <a class="przycisk" href="./admin_panel.php"><i class="fa-solid fa-house" style="color: #fff;"></i> Strona główna</a>
    </div>
    <?php
    include('../DB/db_guestbook.php');
    $baza = new db_guestbook();
    
    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $id_guestbook=$_GET['id'];
            $baza->deleteGuestbookByID($id_guestbook);
        }
            elseif($_GET['opcja'] == 'edit'){
                $title = $_GET['title'];
                $text = $_GET['text'];
                $author = $_GET['author'];
                $id_guestbook = $_GET['id_guestbook'];
                $active = 1;
                $baza->updateGuestbookByID($id_guestbook, $title, $text, $link, $author, $active);
            }
        }

    $baza->databaseConnect();
    $data = $baza->selectGuestbookAll();
    if (!empty($data)){
    
    ?>
    <div class="wpisy">
        <?php
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='wpis' class='artykul'><a href='lista_wpisy_goscia.php?id=".$row['id_guestbook']."'>Tytuł: ".$row['title']."</a><article>Treść:".substr($row['text'],0,150)." ...</article>
                <button class='delete'><a href=guestbook_list.php?del=True&id=".$row['id_guestbook'].">
                Usuń wpis
                </a></button>
                <button class='delete'><a href=guestbook_list.php?edit=True&id=".$row['id_guestbook'].">
                Zatwierdź wpis
                </a></button>
                </div>";
            }
            } else {
                echo "Brak artykułów";
            }
            $baza->close();
        ?>
    </div>
    ?>
<!-- administrator będzie miał możliwość wspomnianej wcześniej akceptacji nowych wpisów do księgi gości -->

</body>
</html>