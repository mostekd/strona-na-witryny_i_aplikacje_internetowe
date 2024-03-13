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
        <span id="menu-icon" onclick="openNav()">&#9776; </span>
        <h2>Biblioteka Wesoła Szkoła</h2>
    </div>
    <div class="zdj_header">
        <?php
        // wyświetlanie 3 zdjęć które można podmienić w panelu administracyjnym w zakładce zmień zdjęcie
        ?>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="../index.php">Strona Główna</a>
            <div class="container">
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
    </div>
        <?php
            include('../DB/db_wpisy_uzytkownika.php');
            $baza = new db_wpisy_uzytkownika();

            if(!empty($_GET)){
                $baza->databaseConnect();
                if(isset($_GET['del']))
                {
                    $id_wpisu_urzytkownika=$_GET['id'];
                    $baza->deleteWpisUrzytkownika($id_wpisu_urzytkownika);
                }
                if(isset($_GET['opcja'])){
                    if($_GET['opcja'] == 'dodaj'){
                        $tytul = $_GET['tytul'];
                        $tresc = $_GET['tresc'];
                        $autor = $_GET['autor'];
                        $baza->insertWpisUrzytkownika($tytul, $tresc, $autor);
                    }
                }
            }
        ?>
        <form class="MyForm">
            <input type=text name="tytul" placeholder="tytul" id="tytul" class="tytul"></input>
            <textarea type=text name="tresc" placeholder="tresc" id="tresc" class="tresc"></textarea>
            <input type=text name="autor" placeholder="autor" id="autor" class="autor"></input>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
            <input type="reset"></input>
        </form>
        <script src="../js/script.js" defer></script>
        <script src="../js/pogoda.js"></script>
        <script src="../js/calendar.js"></script>
    </body>
</html>