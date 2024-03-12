<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header-container">
        <h2>Biblioteka Wesoła Szkoła</h2>
    </div>
	<div class="link">
		<a class="link" href="../index.php"><button>Powrót</button></a>
	</div>
<?php
		include('../DB/db_artykuly.php');
		$baza = new db_artykuly();
        
        $baza->databaseConnect();
		$article_id = $_GET['id'];
		$data = $baza->selectArtykulByID($article_id);
		
		while($row = mysqli_fetch_assoc($data))
		{
			echo "<div class='artykul_full'>Tytuł: ".$row['title']."<br>Data: ".$row['data']."<article><p>Treść:</p>".$row['tresc']."</article><br>Autor: ".$row['autor']."</div>";
		}

		$baza->close();
		?>
</body>
</html>