<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="header-container">
        <h2>Biblioteka Wesoła Szkoła</h2>
    </div>
    <!-- <div class="zdj_header">
        <?php
        // wyświetlanie 3 zdjęć które można podmienić w panelu administracyjnym w zakładce zmień zdjęcie
        ?>
    </div> -->
    <div id="myNav" class="panel_lewy">
        <div class="">
            <a href="wpisy">Strona Główna</a>
            <a href="searchBooks">Wyszukaj Książki</a>
            <a href="searchGuests">Księga Gości</a>
            <a href="contactInfo">Kontakt</a>
            <?php
                if(isset($_GET['wpisy'])){
                    include('./index.php');
                }
                if(isset($_GET['searchBooks'])){
                    include('./search_books.php');
                }
                if(isset($_GET['searchGuests'])){
                    include('./search_guests.php');
                }
                if(isset($_GET['contactInfo'])){
                    include('./contact_info.php');
                }
            ?>
        </div>
    </div>
    <div id="myNav" class="panel_prawy">
        <div class="pogoda">
            <div class="temp">-°C</div>
            <div class="summary">----</div>
            <div class="location"></div>
        </div>
        <div id="calendar">
            <!-- kalendarz z istniejącego skryptu js propozycja: https://air-datepicker.com/ -->
        </div>
        <div class="zdjecie">
        <?php
            $host = "localhost"; // Host bazy danych
            $dbname = "wiai"; // Nazwa bazy danych
            $username = "root"; // Nazwa użytkownika bazy danych
            $password = ""; // Hasło użytkownika bazy danych

            try {
                $con = mysqli_connect($host, $username, $password, $dbname);
                
            }
            catch (PDOException $e) {
                die("Błąd połączenia z bazą danych: " . $e->getMessage());
            }
            
            $select = "SELECT `id`, `nazwa`, `opis`, `path` FROM `zdj` WHERE 1";
            $data = mysqli_query($con, $select);

            $ilosc = 0;
            while($row = mysqli_fetch_array($data))
            {
                $ilosc += 1;
            }
            $losowe = rand(1,$ilosc);
            $select = "SELECT `id`, `nazwa`, `opis`, `path` FROM `zdj` WHERE id = $losowe";
            $data = mysqli_query($con, $select);

            while($row = mysqli_fetch_array($data))
            {
                echo "<img src='{$row[3]}' class='zdj_menu'></img>";
            }
        ?>
        </div>
    </div>