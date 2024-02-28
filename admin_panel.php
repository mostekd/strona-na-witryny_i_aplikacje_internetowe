<?php
session_start();

// Sprawdź, czy administrator jest zalogowany
if (!isset($_SESSION["admin_logged_in"]) || $_SESSION["admin_logged_in"] !== true) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracyjny</title>    
    <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <header>
        <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
        <a href="login.php" id="logout">Wyloguj się</a>
    </header>
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
    $query = 'SELECT `artykul_id`, `title`, `tresc`, `link` FROM `artykul` WHERE 1';
    $data = mysqli_query($connect, $query);
    if (mysqli_num_rows($data) > 0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
            echo "<div id='wpis' class='artykul'><a href='artykul_admin.php?id=".$row['artykul_id']."'>".$row['title']."</a><article>".substr($row['tresc'],0,150)." ...</article></div>";
        }
    }
    mysqli_close($connect);
?>
</body>
</html>
