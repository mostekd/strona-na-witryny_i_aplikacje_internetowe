
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
  </head>
<body>
<nav id="navbar">
  <ul class="navbar-items flexbox-col">
    <li class="navbar-logo flexbox-left">
      <a class="navbar-item-inner flexbox">
      ☰
        </svg>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href='index.php?id=index'>
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="search-outline"></ion-icon>
        </div>
        
        <span class="link-text">Strona Główna</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href='index.php?id=searchBooks'>
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="home-outline"></ion-icon>
        </div>
        <span class="link-text">Wyszukaj Książki</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href='index.php?id=searchGuests'>
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="folder-open-outline"></ion-icon>
        </div>
        <span class="link-text">Księga Gości</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href='index.php?id=contactInfo'>
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="pie-chart-outline"></ion-icon>
        </div>
        <span class="link-text">Kontakt</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left" href='index.php?id=calendar'>
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="pie-chart-outline"></ion-icon>
        </div>
        <span class="link-text">Kalendarz</span>
      </a>
    </li>
    <li class="navbar-item flexbox-left">
      <a class="navbar-item-inner flexbox-left">
        <div class="navbar-item-inner-icon-wrapper flexbox">
          <ion-icon name="pie-chart-outline"></ion-icon>
        </div>
        <h4 class="link-text">POGODA</h4>
      </a>
    </li>
  </ul>
</nav>
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
</body>
</html>
