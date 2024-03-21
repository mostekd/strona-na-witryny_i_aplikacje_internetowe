<div id="contactInfo" class="contact-container">
<?php
	include('../DB/db_artykuly.php');
	$baza = new db_artykuly();
	
	$baza->databaseConnect();
	$article_id = $_GET['id_article'];
	$data = $baza->selectArtykulByID($article_id);
	
	while($row = mysqli_fetch_assoc($data))
	{
		echo "<div class='artykul_full'>Tytuł: ".$row['title']."<br>Data: ".$row['data']."<article><p>Treść:</p>".$row['tresc']."</article><br>Autor: ".$row['autor']."</div>";
	}

	$baza->close();
?>
</div>
