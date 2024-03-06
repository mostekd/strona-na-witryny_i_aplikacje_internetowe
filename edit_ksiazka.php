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

<?php
 include('db_connection.php');
 $baza = new db_connection();

    elseif(){
        $tytul = $_GET['tytul'];
        $autor = $_GET['autor'];
        $wydawnictwo = $_GET['wydawnictwo'];
        $rok_wydania = $_GET['rok_wydania'];
        $ibsn = $_GET['ibsn'];
        $aktywna = $_GET['aktywna'];
        $baza->updateKsiazka($tytul, $autor, $wydawnictwo, $rok_wydania, $ibsn, $aktywna);
    }
?>
</body>
</html>