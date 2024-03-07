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
        <a class="przycisk" href="./lista_ksiazki.php">Wpisy</a>
        <form class="MyForm" action="./lista_ksiazki.php" method = "get">
            <input type=text name="tytul" placeholder="tytuł" id="tytul" class="tytul"></input>
            <textarea type=text name="tresc" placeholder="treść" id="tresc" class="tresc"></textarea>
            <input type=url  name="link" placeholder="link" id="link" class="link"></input>
            <input type=text name="autor" placeholder="autor" id="autor" class="autor"></input>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
        </form>
    </body>
</html>
