<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="./style.css">
</head>
<?php
    include('./header.php');
    include('./leftNav.php');
    include('./rightNav.php');
?>   
<div id="wpisy" class="wpisy-container">
    <div class="link">
        <a href="./wszystkie_wpisy.php"><button>Pokaż wszystkie artykuły</button></a> 
    </div>
    <div>
    <?php
        if(isset($_GET['id'])){
            if($_GET['id'] == 'index'){
                include('./wpisy.php');
            }
            if($_GET['id'] == 'searchBooks'){
                include('./search_books.php');
            }
            if($_GET['id'] =='searchGuests'){
                include('./search_guests.php');
            }
            if($_GET['id'] == 'contactInfo'){
                include('./contact_info.php');
            }
        }
    ?>
    </div>
</div>