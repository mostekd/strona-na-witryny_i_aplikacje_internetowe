<div id="contactInfo" class="contact-container">
<?php
	include('../DB/db_article.php');
	$baza = new db_article();
	
	$baza->databaseConnect();
	$article_id = $_GET['id_article'];
	$data = $baza->selectArticleByID($article_id);
	
	while($row = mysqli_fetch_assoc($data))
	{
		echo "<div class='artykul_full'>Tytuł: ".$row['title']."<br>Data: ".$row['data']."<article><p>Treść:</p>".$row['text']."</article><br>Autor: ".$row['author']."</div>";
	}

	$baza->close();
?>
<a href="./index.php">Powrót</a>
</div>
