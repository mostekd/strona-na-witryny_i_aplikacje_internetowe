<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Panel Administracyjny</title>    
        <link rel="stylesheet" href="admin_panel.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/1deffa5961.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
            <a href="login.php" class="logout" id="logout"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #fff;"></i> Wyloguj się</a>
        </header>
        <div class="panel_lewy">
        <a class="przycisk" href="./lista_ksiazki.php"><i class="fa-solid fa-book" style="color: #fff;"></i> Ksiązki</a>
        </div>
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
