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
        <form>
        <input type=text name="imie" placeholder="imię" id="imie" class="imie"></input>
        <input type=text name="nazwisko" placeholder="nazwisko" id="nazwisko" class="nazwisko"></input>
        <input type=text name="PESEL" placeholder="PESEL" id="PESEL" class="PESEL"></input>
        <input type=email name="email" placeholder="e-mail" id="email" class="email"></input>
        <textarea type=text name="uwagi" placeholder="uwagi" id="uwagi" class="uwagi"></textarea>
        </form>
    </main>
<!-- Formularz dodający ucznia do bazy danych, pole wyszukiwania uczniów, raport (tabela) po kliknięciu na przycisk będzie pokazywała wszystkich uczniów lub uczniów zaczynających się na określoną literę nazwiska lub imienia (wyszukiwanie ucznia) wraz z informacją jakie książki wypożyczył do tej pory i jakie książki ma wypożyczone, -->

</body>
</html>