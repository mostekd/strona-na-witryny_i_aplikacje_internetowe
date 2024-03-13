<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Panel Administracyjny</title>    
        <link rel='stylesheet' href='admin_panel.css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/1deffa5961.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
            <a href="login.php" class="logout" id="logout"><i class="fa-solid fa-arrow-right-from-bracket" style="color: #fff;"></i> Wyloguj się</a>
        </header>
        <div class="panel_lewy">
            <a class="przycisk" href="C:/xampp/htdocs/dashboard/Strony Internetowe/strona-na-witryny_i_aplikacje_internetowe/lista_wpisy.php"><i class="fa-regular fa-newspaper" style="color: #fff;"></i> Wpisy</a>
        </div>

        <?php
         include('C:/xampp/htdocs/dashboard/Strony Internetowe/strona-na-witryny_i_aplikacje_internetowe/DB/db_artykuly.php');
         $baza = new db_artykuly();
         
            if(!empty($_GET)){                
                $baza->databaseConnect();
                $artykul_id=$_GET['id'];
                $data = $baza->selectArtykulByID($artykul_id);
                if (!empty($data)){
                    while($row = mysqli_fetch_assoc($data))
                    {
                        echo "<form class='MyForm' action='./lista_wpisy.php' method = 'get'>";
                        echo "<input type=text name='tytul' placeholder='tytuł' id='tytul' class='tytul' value=".$row['title']."></input>";
                        echo "<textarea type=text name='tresc' placeholder='treść' id='tresc' class='tresc'>".$row['tresc']."</textarea>";
                        echo "<input type=url  name='link' placeholder='link' id='link' class='link' value=".$row['link']."></input>";
                        echo "<input type=text name='autor' placeholder='autor' id='autor' class='autor' value=".$row['autor']."></input>";
                        echo "<input type=hidden name='artykul_id' id='artykul_id' class='artykul_id' value=".$row['artykul_id']."></input>";
                        echo "<input type=hidden name='opcja' id='opcja' class='opcja' value='edytuj'></input>";
                        echo "<input type='submit'></input>";
                        echo "</form>";
                    }
                }
            }
        ?>

        
    </body>
</html>
