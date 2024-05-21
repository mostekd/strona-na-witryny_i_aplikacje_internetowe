<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="./style.css">
</head>
<?php
    include('../DB/db_connection.php');
    include('./header.php');
    include('./leftNav.php');
    echo '<div class="main">';
    ?>
    <div class="wpisy-container">
    <div>
    <?php
        if(isset($_GET['id'])){
            if($_GET['id'] == 'index'){ 
                include('./news.php');
            }
            if($_GET['id'] == 'searchBooks'){
                include('./books.php');
            }
            if($_GET['id'] =='searchGuests'){
                include('./guestbook.php');
            }
            if($_GET['id'] == 'contactInfo'){
                include('./contact.php');
            } 
            if($_GET['id'] == 'addGuestbookEntry'){
                include('./addGuestentryBook.php');
            }  
            if($_GET['id'] == 'article'){
                include('./article.php');
            } 
            if($_GET['id'] == 'news_all'){
                include('./news_all.php');
            } 
        }
        else{
            include('./news.php');
        }
    ?>
    </div>
</div>
<?php
    include('./rightNav.php');
?>  
</div> 
