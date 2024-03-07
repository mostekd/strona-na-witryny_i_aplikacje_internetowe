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
        <a class="przycisk" href="./lista_uczniowie.php">Uczniowie</a>

        <?php
         include('../DB/db_uczniowie.php');
         $baza = new db_uczniowie();
         
            if(!empty($_GET)){                
                $baza->databaseConnect();
                $id_ucznia=$_GET['id'];
                $data = $baza->selectUczenByID($id_ucznia);
                if (!empty($data)){
                    while($row = mysqli_fetch_assoc($data))
                    {
                        echo "<form class='MyForm' action='./lista_uczniowie.php' method = 'get'>";
                        echo "<input type=text name='imie' placeholder='imię' id='imie' class='imie' value=".$row['imie']."></input>";
                        echo "<input type=text name='nazwisko' placeholder='nazwisko' id='nazwisko' class='nazwisko'".$row['nazwisko']."></input>";
                        echo "<input type=text  name='PESEL' placeholder='PESEL' id='PESEL' class='PESEL' value=".$row['PESEL']."></input>";
                        echo "<input type=text name='email' placeholder='email' id='email' class='email' value=".$row['email']."></input>";
                        echo "<textarea type=text name='uwagi' placeholder='uwagi' id='uwagi' class='uwagi' value=".$row['uwagi']."></textarea>";
                        echo "<input type=hidden name='id_ucznia' id='id_ucznia' class='id_ucznia' value=".$row['id_ucznia']."></input>";
                        echo "<input type=hidden name='opcja' id='opcja' class='opcja' value='edytuj'></input>";
                        echo "<input type='submit'></input>";
                        echo "</form>";
                    }
                }
            }
        ?>

        
    </body>
</html>