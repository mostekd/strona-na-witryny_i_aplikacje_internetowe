<?php
include('./head_admin.php');
?>
    <header>
        <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
        <a href="login.php" class="logout" id="logout"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #fff;"></i> Wyloguj się</a>
    </header>
    <div class="panel_lewy">
        <a class="przycisk" href="./admin_panel.php"><i class="fa-solid fa-house" style="color: #fff;"></i> Strona główna</a>
    </div>

<!-- tabela wypożyczenia powinna zawierać (id, id książki, id ucznia wypożyczającego, data wypożyczenia, data zwrotu), Administrator będzie mógł również po kliknięciu w przycisk w osobnym raporcie (tabeli) zobaczyć wszystkie książki przetrzymywane powyżej określonego okresu (okres wypożyczenia książki będzie możliwy do zmiany przez Administratora w osobnym miejscu, domyślnie 2 tygodnie), Administrator przy wyporzyczeniu książki przez ucznia wybiera go z listy uczniów z tabeli uczniowie -->

</body>
</html>