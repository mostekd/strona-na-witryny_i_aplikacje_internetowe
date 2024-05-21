<form class="MyForm"  action="./index.php" method = "get">
    <input type=text name="title" placeholder="tytuł" id="title" class="title"></input>
    <textarea type=text name="text" placeholder="treść" id="text" class="text"></textarea>
    <input type=text name="author" placeholder="autor" id="author" class="author"></input>
    <input type=hidden name="id" id="id" class="id" value='searchGuests'></input>
    <input type=hidden name="option" id="option" class="option" value='addGuestbookEntry'></input>
    <input type="submit"></input>
    <input type="reset"></input>
</form>