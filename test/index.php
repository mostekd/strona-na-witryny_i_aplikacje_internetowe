<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteka</title>
    <link rel="stylesheet" href="style.css">
    <script src="./js/menu.js" defer></script>
    <script src="./js/searchBooks.js" defer></script>
    <script src="./js/searchGuests.js" defer></script>
    <script src="./js/contactInfo.js" defer></script>
    <script src="./js/adminPanel.js" defer></script>
    <script src="./js/common.js" defer></script>
</head>
<body>
    <div class="header-container">
        <span id="menu-icon" onclick="openNav()">&#9776; </span>
        <h2>Biblioteka Wesoła Szkoła</h2>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="#" onclick="showSearchBooks()">Wyszukaj Książki</a>
            <a href="#" onclick="showSearchGuests()">Księga Gości</a>
            <a href="#" onclick="showContactInfo()">Kontakt</a>
        </div>
        <div class="container">
            <div class="temp">-°C</div>
            <div class="summary">----</div>
            <div class="location"></div>
        </div>
        <div id="calendar">
        </div>
    </div>

    <?php include('search_books.php'); ?>
    <?php include('search_guests.php'); ?>
    <?php include('contact_info.php'); ?>

    <footer id="footer">
        Dawid Mostowski 3A
    </footer>
    <script src="./js/pogoda.js"></script>
    <script src="./js/calendar.js"></script>
</body>
</html>
