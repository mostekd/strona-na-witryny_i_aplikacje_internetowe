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
    $query = 'SELECT `artykul_id`, `title`, `tresc`, `link`, `autor`, `data` FROM `artykul` WHERE 1';
    $data = mysqli_query($connect, $query);
    
    $counter = 0; // Licznik artykułów wyświetlonych
    if (mysqli_num_rows($data) > 0)
    {
        while($row = mysqli_fetch_assoc($data))
        {
            echo "<div id='wpis' class='artykul'>
                <a href='artykul.php?id=".$row['artykul_id']."'>
                    <section class='gorny_panel_wpisu'>
                        <p>Tytuł:".$row['title']."</p>
                        <p>Data dodania: ".$row['data']."</p>
                    </section>
                    <article>
                        <p>Treść:</p>
                        ".substr($row['tresc'],0,150)." ...
                    </article>
                </a>
            </div>";
            $counter++;
            if ($counter >= 5) {
                break; // Przerwij pętlę po wyświetleniu 5 artykułów
            }
        }
    }
    mysqli_close($connect);
?>
