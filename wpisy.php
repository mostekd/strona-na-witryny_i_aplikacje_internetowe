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
            echo "<div id='wpis' class='artykul'><a href='artykul.php?id=".$row['artykul_id']."'>".$row['title']."</a><article>".substr($row['tresc'],0,150)." ...</article></div>";
        }
    }
    mysqli_close($connect);
?>