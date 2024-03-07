<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracyjny</title>    
    <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <header>
        <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
        <a href="login.php" class="logout" id="logout">Wyloguj się</a>
    </header>
    <a class="przycisk" href="./admin_panel.php">Strona główna</a>
    <a class="przycisk" href="./dodaj_wpis.php">Dodaj wpis</a>

    <?php
    include('../DB/db_artykuly.php');
    $baza = new db_artykuly();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $artykul_id=$_GET['id'];
            $baza->deleteArtykul($artykul_id);
        }
        if(isset($_GET['opcja'])){
            if($_GET['opcja'] == 'dodaj'){
                $tytul = $_GET['tytul'];
                $tresc = $_GET['tresc'];
                $link = $_GET['link'];
                $autor = $_GET['autor'];
                $baza->insertArtykul($tytul, $tresc, $link, $autor);
            }
            elseif($_GET['opcja'] == 'edytuj'){
                $tytul = $_GET['tytul'];
                $tresc = $_GET['tresc'];
                $link = $_GET['link'];
                $autor = $_GET['autor'];
                $artykul_id = $_GET['artykul_id'];
                $baza->updateArtykul($artykul_id, $tytul, $tresc, $link, $autor);
            }
        }
        else{
            echo "<p>Nie wybrnao funkcji</p>";
        }
    }
    
    $baza->databaseConnect();
    $data = $baza->selectArtykul();
    if (!empty($data)){
    
    ?>
    <div class="wpisy">
        <?php
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='wpis' class='artykul'><a href='artykul_admin.php?id=".$row['artykul_id']."'>Tytuł: ".$row['title']."</a><article>Treść:".substr($row['tresc'],0,150)." ...</article>
                <button class='delete'><a href=lista_wpisy.php?del=True&id=".$row['artykul_id'].">
                Usuń wpis
                </a></button>
                <button class='delete'><a href=edit_wpis.php?id=".$row['artykul_id'].">
                Edytuj wpis
                </a></button>
                </div>";
            }
            } else {
                echo "Brak artykułów";
            }
            $baza->close();
        ?>
    </div>
</body>
</html>
