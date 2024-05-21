<div id="contactInfo" class="contact-container">
<?php
	include('../DB/db_article.php');
	$baza = new db_article();
	
	$baza->databaseConnect();
	$article_id = $_GET['id_article'];
	$data = $baza->selectArticleByID($article_id);
	
	while($row = mysqli_fetch_assoc($data))
	{
		echo "<div class='artykul_full'><p>Tytuł: </p> <p>".$row['title']." </p> <br> <p> Data: ".$row['data']." </p><article><p>Treść:</p> <p>".$row['text']." </p></article><br> <p>Autor:</p> <p>".$row['author']."</p></div>";
	}

	$baza->close();
?>
<a href="./index.php">Powrót</a>
</div>
