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
            <a href="login.php" class="logout" id="logout">Wyloguj się</a>
        </header>
        <?php
    include('db_connection.php');
    $baza = new db_connection();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $artykul_id=$_GET['id'];
            $baza->deleteArtykul($artykul_id);
        }
        elseif(isset($_GET['tytul'])){
            $tytul = $_GET['tytul'];
            $tresc = $_GET['tresc'];
            $link = $_GET['link'];
            $autor = $_GET['autor'];
            $baza->insertArtykul($tytul, $tresc, $link, $autor);
        }
    }
    ?>
        <form class="MyForm" action="./admin_panel.php" method = "get">
            <input type=text name="tytul" placeholder="tytuł" id="tytul" class="tytul"></input>
            <textarea type=text name="tresc" placeholder="treść" id="tresc" class="tresc"></textarea>
            <input type=text name="link" placeholder="link" id="link" class="link"></input>
            <input type=text name="autor" placeholder="autor" id="autor" class="autor"></input>
            <input type="submit"></input>
        </form>
    </body>
</html>
