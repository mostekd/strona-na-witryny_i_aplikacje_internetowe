<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Panel Administracyjny</title>    
        <link rel='stylesheet' href='admin_panel.css'>
    </head>
    <body>
        <header>
            <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
            <a href='login.php' class='logout' id='logout'>Wyloguj się</a>
        </header>
        <a class="przycisk" href="./lista_ksiazki.php">Książki</a>

        <?php
         include('../DB/db_ksiazki.php');
         $baza = new db_ksiazki();
         
            if(!empty($_GET)){                
                $baza->databaseConnect();
                $id_ksiazki=$_GET['id'];
                $data = $baza->selectKsiazkaByID($id_ksiazki);
                if (!empty($data)){
                    while($row = mysqli_fetch_assoc($data))
                    {
                        echo "<form class='MyForm' action='./lista_ksiazki.php' method = 'get'>";
                        echo "<input type=text name='tytul' placeholder='tytuł' id='tytul' class='tytul' value=".$row['tytul']."></input>";
                        echo "<input type=text  name='autor' placeholder='autor' id='autor' class='autor' value=".$row['autor']."></input>";
                        echo "<input type=text name='wydawnictwo' placeholder='wydawnictwo' id='wydawnictwo' class='wydawnictwo' value=".$row['wydawnictwo']."></input>";
                        echo "<input type=text name='rok_wydania' placeholder='rok wydania' id='rok_wydania' class='rok_wydania' value=".$row['rok_wydania']."></input>";
                        echo "<input type=text name='isbn' placeholder='isbn' id='isbn' class='isbn' value=".$row['isbn']."></input>";
                        echo "<textarea type=text name='uwagi' placeholder='uwagi' id='uwagi' class='uwagi' value=".$row['uwagi']."></textarea>";
                        echo "Aktywna: <input type=checkbox name='aktywna' placeholder='aktywna' id='aktywna' class='aktywna' value=".$row['aktywna']."></input>";
                        echo "<input type=hidden name='id_ksiazki' id='id_ksiazki' class='id_ksiazki' value=".$row['id_ksiazki']."></input>";
                        echo "<input type=hidden name='opcja' id='opcja' class='opcja' value='edytuj'></input>";
                        echo "<input type='submit'></input>";
                        echo "</form>";
                    }
                }
            }
        ?>

        
    </body>
</html>
