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
        <a href="./index.php"><button>Powrót</button></a>
    </div>\
    <div class="ksiazki">
    <?php
		$is_ksiazki = $_GET['id'];
		
		$connect = mysqli_connect("localhost","root","","wiai");
		if (!$connect) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$query = "SELECT * FROM `ksiazki` WHERE id_ksiazki =".$id_ksiazki;
		$data = mysqli_query($connect, $query);
		
		if (mysqli_num_rows($data) > 0) 
		{
			while($row = mysqli_fetch_assoc($data))
			{
				echo "<div class='artykul_full'>Tytuł: ".$row['tytul']."<br>Wydawnictwo: ".$row['wydawnictwo']."<p>Treść:</p>".$row['tresc']."<br>Autor: ".$row['autor']."</div>";
			}
		}	

		mysqli_close($connect);
		?>
    </div>
</body>
</html>