<div id="contactInfo" class="contact-container">
<?php
    include('../DB/db_guestbook.php');
    $baza = new db_guestbook();
	
	$baza->databaseConnect();
	$id_guestbook = $_GET['id_guestbook'];
	$data = $baza->selectGuestbookAll();
    if($_GET['opcja'] == 'edit'){
        $title = $_GET['title'];
        $text = $_GET['text'];
        $author = $_GET['author'];
        $link = $_GET['link'];  
        $id_guestbook = $_GET['id_guestbook'];
        $active = 1;
        $baza->updateGuestbookByID($id_guestbook, $title, $text, $link, $author, $active);
    }
	
	while($row = mysqli_fetch_assoc($data))
	{
		echo "<div class='artykul_full'>Tytuł: ".$row['title']."<br>Data: ".$row['data']."<article><p>Treść:</p>".$row['text']."</article><br>Autor: ".$row['author']."
        </div>";
        echo "<input type=hidden name='opcja' id='opcja' class='opcja' value='edytuj'></input><a href='./guestbook_list.php'></a>"
	}

	$baza->close();
?>
</div>
