<?php
include('./head_admin.php');
?>
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
