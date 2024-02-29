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
        <a href="login.php" class="logout" id="logout"><button>Wyloguj się</button></a>
    </header>
    <a href="./dodaj_artykul.php"><button>Dodaj artykuł</button></a>
    <?php
    include('db_connection.php');
    $baza = new db_connection();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $artykul_id=$_GET['id'];
            $baza->deleteArtykul($artykul_id);
        }
        elseif(isset($_GET['tytul'])){
            $tytul = $_GET['tytul'];
            $tresc = $_GET['tresc'];
            $link = $_GET['link'];
            $baza->insertArtykul($tytul, $tresc, $link);
        }
    }
    
    $baza->databaseConnect();
    $data = $baza->selectArtykul();
    if (!empty($data)){

        while($row = mysqli_fetch_assoc($data))
        {
            echo "<div id='wpis' class='artykul'><a href='artykul_admin.php?id=".$row['artykul_id']."'>".$row['title']."</a><article>".substr($row['tresc'],0,150)." ...</article>
            <button class='delete'><a href=admin_panel.php?del=True&id=".$row['artykul_id'].">
            Usuń wpis
            </a></button>
            </div>";
        }
    } else {
        echo "Brak artykułów";
    }
    $baza->close();

?>
</body>
</html>
