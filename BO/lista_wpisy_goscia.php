<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracyjny</title>    
    <link rel="stylesheet" href="admin_panel.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/1deffa5961.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
        <a href="login.php" class="logout" id="logout"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #fff;"></i> Wyloguj się</a>
    </header>
    <div class="panel_lewy">
        <a class="przycisk" href="C:/xampp/htdocs/dashboard/Strony Internetowe/strona-na-witryny_i_aplikacje_internetowe/admin_panel.php"><i class="fa-solid fa-house" style="color: #fff;"></i> Strona główna</a>
    </div>
    <?php
    include('C:/xampp/htdocs/dashboard/Strony Internetowe/strona-na-witryny_i_aplikacje_internetowe/DB/db_wpisy_uzytkownika.php');
    $baza = new db_wpisy_uzytkownika();
    
    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $id_wpisu_urzytkownika=$_GET['id'];
            $baza->deleteWpisUrzytkownika($id_wpisu_urzytkownika);
        }
            elseif($_GET['opcja'] == 'edytuj'){
                $tytul = $_GET['tytul'];
                $tresc = $_GET['tresc'];
                $autor = $_GET['autor'];
                $id_wpisu_urzytkownika = $_GET['id_wpisu_urzytkownika'];
                $baza->updateWpisUrzytkownika($id_wpisu_urzytkownika, $tytul, $tresc, $link, $autor);
            }
        }

    $baza->databaseConnect();
    $data = $baza->selectWpisUrzytkownika();
    if (!empty($data)){
    
    ?>
    <div class="wpisy_urzytkownika">
        <?php
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='wpis' class='artykul'><a href='lista_wpisy_goscia.php?id=".$row['id_wpisu_urzytkownika']."'>Tytuł: ".$row['title']."</a><article>Treść:".substr($row['tresc'],0,150)." ...</article>
                <button class='delete'><a href=lista_wpisy.php?del=True&id=".$row['id_wpisu_urzytkownika'].">
                Usuń wpis
                </a></button>
                <button class='delete'><a href=edytuj_wpis.php?id=".$row['id_wpisu_urzytkownika'].">
                Zatwierdź wpis
                </a></button>
                </div>";
            }
            } else {
                echo "Brak artykułów";
            }
            $baza->close();
        ?>
    </div>
    ?>
<!-- administrator będzie miał możliwość wspomnianej wcześniej akceptacji nowych wpisów do księgi gości -->

</body>
</html>