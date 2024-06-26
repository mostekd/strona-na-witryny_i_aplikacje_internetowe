<?php
include('./head_admin.php');
?>
    <div class="panel_lewy">
        <a class="przycisk" href="./admin_panel.php"><i class="fa-solid fa-house" style="color: #fff;"></i> Strona główna</a>
    </div>
    <div class="guesbook_article">
    <?php
    include('../DB/db_guestbook.php');
    $baza = new db_guestbook();
    
    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $id_guestbook=$_GET['id_guestbook'];
            $baza->deleteGuestbookByID($id_guestbook);
        }
        }

    $baza->databaseConnect();

    $id_guestbook = isset($_GET['id_guestbook']) ? $_GET['id_guestbook'] : null;

    if($id_guestbook !== null) {
        $data = $baza->selectGuestbookByID($id_guestbook);
        if($data) {
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='wpis' class='artykul'>Tytuł: ".$row['title']."</a><article>Treść:".$row['text']."</article> Autor:".$row['author']."
                <button class='delete'><a href=guestbook_list.php?del=True&id=".$row['id_guestbook'].">
                Usuń wpis
                </a></button>
                <button class='delete'><a href='./guestbook_list.php?active=True&id=".$row['id_guestbook']."'>
                Zatwierdź wpis
                </div>";
            }}
            else {
                echo "Guestbook entry not found.";
            }
        } 
        else {
            echo "No guestbook ID provided.";
        }

    $baza->close();
?>
<a href="./guestbook_list.php">Powrót</a>
</div>