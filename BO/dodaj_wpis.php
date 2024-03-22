<?php
include('./head_admin.php');
?>
        <div class="panel_lewy">
            <a class="przycisk" href="./news_list.php"><i class="fa-regular fa-newspaper" style="color: #fff;"></i> Wpisy</a>
        </div>
        <form class="MyForm" action="./news_list.php" method = "get">
            <input type=text name="tytul" placeholder="tytuł" id="tytul" class="tytul"></input>
            <textarea type=text name="tresc" placeholder="treść" id="tresc" class="tresc"></textarea>
            <input type=url  name="link" placeholder="link" id="link" class="link"></input>
            <input type=text name="autor" placeholder="autor" id="autor" class="autor"></input>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
        </form>
    </body>
</html>
