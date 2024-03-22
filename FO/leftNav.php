<div id="myNav" class="panel_lewy">
    <div class="">
        <a href="index.php?id=index" >Strona Główna</a>
        <a href="index.php?id=searchBooks">Wyszukaj Książki</a>
        <a href="index.php?id=searchGuests">Księga Gości</a>
        <a href="index.php?id=contactInfo">Kontakt</a>
        <?php
            if(isset($_GET['index'])){
                include('./index.php');
            }
            if(isset($_GET['searchBooks'])){
                include('./search_books.php');
            }
            if(isset($_GET['searchGuests'])){
                include('./search_guests.php');
            }
            if(isset($_GET['contactInfo'])){
                include('./contact_info.php');
            }
        ?>
    </div>
</div>