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
    $host = "localhost"; // Host bazy danych
    $dbname = "wiai"; // Nazwa bazy danych
    $username = "root"; // Nazwa użytkownika bazy danych
    $password = ""; // Hasło użytkownika bazy danych

    $connect = mysqli_connect($host, $username, $password, $dbname);
    if(!$connect)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    $query = 'SELECT `artykul_id`, `title`, `tresc`, `link`, `autor` FROM `artykul` WHERE 1';
    $data = mysqli_query($connect, $query);
    if (mysqli_num_rows($data) > 0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
            echo "<div id='wpis' class='artykul'><a href='artykul.php?id=".$row['artykul_id']."'><p>Tytuł:</p>".$row['title']."<p>Data:</p>".$row['data']."</a><article><p>Treść:</p>".substr($row['tresc'],0,150)." ...</article></div>";
        }
    }
    mysqli_close($connect);
?>
<a href="./index.php"><button>Powrót</button></a>
</body>
</html>