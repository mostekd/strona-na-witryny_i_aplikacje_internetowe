<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracyjny</title>    
    <link rel="stylesheet" href="admin_panel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
        <a href="login.php" class="logout" id="logout">Wyloguj się</a>
    </header>
    <div class="panel_prawy">
    <i class="fa-solid fa-book"></i><a class="przycisk" href="./lista_wpisy.php">Wpisy</a>
    <a class="przycisk" href="./lista_ksiazki.php">Ksiązki</a>
    <a class="przycisk" href="./lista_uczniowie.php">Uczniowie</a>
    <a class="przycisk" href="./wypozyczenia.php">Wypożyczenia</a>
    <a class="przycisk" href="./zatwierdz_goscia.php">Zatwierdzenie wpisów użytkowników</a>
    <a class="przycisk" href="./zmien_zdjecie.php">Zmień zdjęcie</a>
    </div>
</body>
</html>
