<?php
    if(isset($_GET['wpisy'])){
        include('./header.php');
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
    <div id="wpisy" class="wpisy-container">
        <div class="link">
            <a href="./wszystkie_wpisy.php"><button>Pokaż wszystkie artykuły</button></a> 
        </div>
        <?php
            include('./wpisy.php');
        ?>
    </div>
<?php
    include('end_html.php')
?>