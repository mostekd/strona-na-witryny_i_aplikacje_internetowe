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
    <a class="przycisk" href="./zatwierdz_goscia.php">Zatwierdzenie użytkowników</a>
    <a class="przycisk" href="./dodaj_ksiazki.php">Dodaj / Zmień ksiązki</a>
    <a class="przycisk" href="./zmien_zdjecie.php">Zmień zdjęcie</a>
    <a class="przycisk" href="./wpisy_admin.php">Dodaj wpis</a>

    <!-- tabela wypożyczenia powinna zawierać (id, id książki, id ucznia wypożyczającego, data wypożyczenia, data zwrotu), Administrator będzie mógł również po kliknięciu w przycisk w osobnym raporcie (tabeli) zobaczyć wszystkie książki przetrzymywane powyżej określonego okresu (okres wypożyczenia książki będzie możliwy do zmiany przez Administratora w osobnym miejscu, domyślnie 2 tygodnie), dodatkowy raport (tabela) po kliknięciu na przycisk będzie pokazywała wszystkich uczniów lub uczniów zaczynających się na określoną literę nazwiska lub imienia (wyszukiwanie ucznia) wraz z informacją jakie książki wypożyczył do tej pory i jakie książki ma wypożyczone, inne przyciski powinny pokazywać każdą z trzech tabel opisaną powyżej (czyli trzy przyciski z napisami książki, uczniowie, wypożyczenia) po kliknięciu w te przyciski pojawiać będą się tabele zawierające wszystkie wpisy w bazie z danej tabeli -->
    </div>
</body>
</html>
