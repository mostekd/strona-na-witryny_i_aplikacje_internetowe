<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header-container">
        <span id="menu-icon" onclick="openNav()">&#9776; </span>
        <h2>Biblioteka Wesoła Szkoła</h2>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="#" onclick="showWpisy()">Strona Główna</a>
            <a href="#" onclick="showSearchBooks()">Wyszukaj Książki</a>
            <a href="#" onclick="showSearchGuests()">Księga Gości</a>
            <a href="#" onclick="showContactInfo()">Kontakt</a>
        </div>
        <div class="container">
            <div class="temp">-°C</div>
            <div class="summary">----</div>
            <div class="location"></div>
        </div>
        <div id="calendar">
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
    <?php
        include('wpisy.php');
        include('search_books.php'); 
        include('search_guests.php');
        include('contact_info.php'); 
    ?>
    <footer id="footer">
        Dawid Mostowski 3A
    </footer>
    <script src="./js/script.js" defer></script>
    <script src="./js/pogoda.js"></script>
    <script src="./js/calendar.js"></script>
</body>
</html>