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
            <a href="login.php" class="logout" id="logout"><button>Wyloguj się</button></a>
        </header>
        <form class="MyForm" action="./admin_panel.php" method = "get">
            <input type=text name="tytul" placeholder="tytuł" id="tytul" class="tytul"></input>
            <input type=text name="tresc" placeholder="treść" id="tresc" class="tresc"></input>
            <input type=text name="link" placeholder="link" id="link" class="link"></input>
            <input type="submit"></input>
        </form>
    </body>
</html>
