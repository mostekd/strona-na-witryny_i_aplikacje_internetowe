<?php
include('./head_admin.php');
?>
        <div class="panel_lewy">
            <a class="przycisk" href="./news_list.php"><i class="fa-regular fa-newspaper" style="color: #fff;"></i> Wpisy</a>
        </div>
        <form class="MyForm" action="./news_list.php" method = "get">
            <input type=text name="title" placeholder="tytuł" id="title" class="title"></input>
            <textarea type=text name="text" placeholder="treść" id="text" class="text"></textarea>
            <input type=url  name="link" placeholder="link" id="link" class="link"></input>
            <input type=text name="author" placeholder="autor" id="author" class="author"></input>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
        </form>
    </body>
</html>
