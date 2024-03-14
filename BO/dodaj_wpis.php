<?php
include('./head_admin.php');
?>
        <header>
            <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
            <!-- przycisk wyloguj się na być po prawej stronie na górze -->
            <a href="login.php" class="logout" id="logout"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #fff;"></i> Wyloguj się</a>
        </header>
        <div class="panel_lewy">
            <a class="przycisk" href="./lista_wpisy.php"><i class="fa-regular fa-newspaper" style="color: #fff;"></i> Wpisy</a>
        </div>
        <form class="MyForm" action="./lista_wpisy.php" method = "get">
            <input type=text name="tytul" placeholder="tytuł" id="tytul" class="tytul"></input>
            <textarea type=text name="tresc" placeholder="treść" id="tresc" class="tresc"></textarea>
            <input type=url  name="link" placeholder="link" id="link" class="link"></input>
            <input type=text name="autor" placeholder="autor" id="autor" class="autor"></input>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
        </form>
    </body>
</html>
