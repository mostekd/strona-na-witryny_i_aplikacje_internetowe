<?php
include('./header.php');
?>
    <div class="link">
        <a href="./index.php"><button>Powrót</button></a>
    </div>
    <div class="wpisy-container">
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
        $query = 'SELECT * FROM artykul ORDER BY artykul_id DESC';
        $data = mysqli_query($connect, $query);
        if (mysqli_num_rows($data) > 0)
        {
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='wpis' class='artykul'>
                <section class='gorny_panel_wpisu'>
                    <p>Tytuł:".$row['title']."</p>
                    <p>Data dodania: ".$row['data']."</p>
                </section>
                <article>
                    <p>Treść:</p>
                    ".substr($row['tresc'],0,150)." ...
                    <a href='artykul.php?id=".$row['artykul_id']."'>Więcej</a>
                </article>
                </div>";
            }
        }
        mysqli_close($connect);
    ?>
    </div>
<?php
    include('end_html.php')
?>