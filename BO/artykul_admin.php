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
<?php
		$article_id = $_GET['id'];
		
		$connect = mysqli_connect("localhost","root","","wiai");
		if (!$connect) 
		{
			die("Connection failed: " . mysqli_connect_error());
		}
		
		$query = "SELECT `artykul_id`, `title`, `tresc`, `link`, `autor` FROM `artykul` WHERE artykul_id =".$article_id;
		$data = mysqli_query($connect, $query);
		
		if (mysqli_num_rows($data) > 0) 
		{
			while($row = mysqli_fetch_assoc($data))
			{
				echo "<div class='artykul_full'>".$row['title']."<article>".$row['tresc']."</article></div>";
			}
		}	

		mysqli_close($connect);
		?>
    <a href="./index.php"><button>Powrót</button></a>
</body>
</html>