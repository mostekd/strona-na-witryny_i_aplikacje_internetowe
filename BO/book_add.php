<?php
include('./head_admin.php');
?>
        <div class="panel_lewy">
        <a class="przycisk" href="./book_list.php"><i class="fa-solid fa-book" style="color: #fff;"></i> Ksiązki</a>
        </div>
        <form class="MyForm" action="./book_list.php" method = "get">
            <input type=text name="title" placeholder="tytuł" id="title" class="title"></input>
            <input type=text name="author" placeholder="autor" id="author" class="author"></input>
            <input type=text name="publisher" placeholder="wydawnictwo" id="publisher" class="publisher"></input>
            <input type=month name="publishYear" placeholder="rok_wydania" id="publishYear" class="publishYear"></input>
            <input type=text  name="isbn" placeholder="isbn" id="isbn" class="isbn"></input>
            <textarea type=text name="comments" placeholder="uwagi" id="comments" class="comments"></textarea>
            Aktywna: <input type=checkbox name="active" id="active" class="active"></input>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
        </form>
    </body>
</html>
