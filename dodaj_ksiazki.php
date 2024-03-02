<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracyjny</title>    
    <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <header>
        <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
        
    </header>
    <a class="przycisk" href="./admin_panel.php">Strona Główna</a>
    <form class="dodaj_ksiazki_frmularz" action="dodaj_ksiazki.php" method = "get">
        <input type=text name="tytul" placeholder="tytuł" id="tytul" class="tytul"></input>
        <input type=text name="autor" placeholder="autor" id="autor" class="autor"></input>
        <input type=text name="wydawnictwo" placeholder="wydawnictwo" id="wydawnictwo" class="wydawnictwo"></input>
        <input type=text name="rok wydania" placeholder="rok_wydania" id="rok_wydania" class="rok_wydania"></input>
        <input type=text name="isbn" placeholder="isbn" id="tytul" class="tytul"></input>
        Aktywna: <input type="checkbox" id="active" name="active">
    </form>
    <div class="ksiazki">
        <?php
            include('db_connection.php');
            $baza = new db_connection();

            if(!empty($_GET)){
                $baza->databaseConnect();
                if(isset($_GET['del']))
                {
                    $artykul_id=$_GET['id'];
                    $baza->deleteKsiazka($id_ksiazki);
                }
                elseif(isset($_GET['tytul'])){
                    $tytul = $_GET['tytul'];
                    $wydawnictwo = $_GET['wydawnictwo'];
                    $rok_wydania = $_GET['rok_wydania'];
                    $ibsn = $_GET['ibsn'];
                    $aktywna = $_GET['aktywna'];
                    $baza->insertKsiazka($tytul, $wydawnictwo, $rok_wydania, $ibsn, $aktywna);
                }
            }
            echo "<div id='ksiazka' class='ksiazka'>Tytuł: ".$row['tytul']."Wydawnictwo: ".$row['$wydawnictwo']."Rok wydania: ".$row['$rok_wydania']."ibsn: ".$row['$ibsn']."Aktywna: ".$row['$aktywna']."
                <button class='delete'><a href=dodaj_ksiazki.php?del=True&id=".$row['id_ksiazki'].">
                Usuń wpis
                </a></button>
                </div>";
        ?>
    </div>
    <!-- Administrator będzie miał również możliwość wprowadzania nowych książek, jak również ich modyfikację i usuwanie, tabela książki powinna zawierać (id, tytuł, autor, wydawnictwo, rok wydania, isbn, aktywna(bool), uwagi), -->