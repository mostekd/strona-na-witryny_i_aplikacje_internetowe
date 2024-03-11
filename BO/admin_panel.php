<!DOCTYPE html>
<html lang="pl">
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
        <a class="przycisk" href="./lista_wpisy.php"><i class="fa-regular fa-newspaper" style="color: #fff;"></i> Wpisy</a>
        <a class="przycisk" href="./lista_ksiazki.php"><i class="fa-solid fa-book" style="color: #fff;"></i> Ksiązki</a>
        <a class="przycisk" href="./lista_uczniowie.php"><i class="fa-regular fa-user" style="color: #fff;"></i> Uczniowie</a>
        <a class="przycisk" href="./wypozyczenia.php"><i class="fa-solid fa-book-bookmark" style="color: #fff;"></i> Wypożyczenia</a>
        <a class="przycisk" href="./lista_wpisy_goscia.php"><i class="fa-solid fa-user-check" style="color: #fff;"></i> Zatwierdzenie wpisów użytkowników</a>
        <a class="przycisk" href="./zmien_zdjecie.php"><i class="fa-regular fa-image" style="color: #fff;"></i> Zmień zdjęcie</a>
    </div>
</body>
</html>
