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
        <a class="przycisk" href="./lista_ksiazki.php">Książki</a>
        <form class="MyForm" action="./lista_ksiazki.php" method = "get">
            <input type=text name="tytul" placeholder="tytuł" id="tytul" class="tytul"></input>
            <input type=text name="autor" placeholder="autor" id="autor" class="autor"></input>
            <input type=text name="wydawnictwo" placeholder="wydawnictwo" id="wydawnictwo" class="wydawnictwo"></input>
            <input type=text name="rok_wydania" placeholder="rok_wydania" id="rok_wydania" class="rok_wydania"></input>
            <input type=text  name="isbn" placeholder="isbn" id="isbn" class="isbn"></input>
            <textarea type=text name="uwagi" placeholder="uwagi" id="uwagi" class="uwagi"></textarea>
            Aktywna: <input type=checkbox name="aktywna" id="aktywna" class="aktywna"></input>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
        </form>
    </body>
</html>
