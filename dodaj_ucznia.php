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
    <main>
        <br>Dodaj ucznia:
        <form>
            <input type=text name="imie" placeholder="imię" id="imie" class="imie"></input>
            <input type=text name="nazwisko" placeholder="nazwisko" id="nazwisko" class="nazwisko"></input>
            <input type=text name="PESEL" placeholder="PESEL" id="PESEL" class="PESEL"></input>
            <input type=email name="email" placeholder="e-mail" id="email" class="email"></input>
            <textarea type=text name="uwagi" placeholder="uwagi" id="uwagi" class="uwagi"></textarea>
            <input type="submit"></input>
        </form>
    </main>

    <?php
    include('db_uczniowie.php');
    $baza = new db_uczniowie();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $id_ucznia=$_GET['id'];
            $baza->deleteUczen($id_ucznia);
        }
        elseif(isset($_GET['imie'])){
            $imie = $_GET['imie'];
            $nazwisko = $_GET['nazwisko'];
            $PESEL = $_GET['PESEL'];
            $email = $_GET['email'];
            $uwagi = $_GET['uwagi'];
            $baza->insertUczen($imie, $nazwisko, $PESEL, $email, $uwagi);
        }
    }
    $baza->databaseConnect();
?>