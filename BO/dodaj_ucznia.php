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
            <a class="przycisk" href="./lista_uczniowie.php"><i class="fa-regular fa-user" style="color: #fff;"></i>Uczniowie</a>
        </div>
        <form class="MyForm" action="./lista_uczniowie.php" method = "get">
            <input type=text name="imie" placeholder="imie" id="imie" class="imie"></input>
            <input type=text name="nazwisko" placeholder="nazwisko" id="nazwisko" class="nazwisko"></input>
            <input type=text name="PESEL" placeholder="PESEL" id="PESEL" class="PESEL"></input>
            <input type=email name="email" placeholder="email" id="email" class="email"></input>
            <textarea type=text name="uwagi" placeholder="uwagi" id="uwagi" class="uwagi"></textarea>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
        </form>
    </body>
</html>
