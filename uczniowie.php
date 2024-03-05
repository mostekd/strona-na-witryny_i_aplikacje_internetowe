<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administracyjny</title>    
    <link rel="stylesheet" href="admin_panel.css">
</head>
<body>
    <header>
        <h2>Biblioteka Wesoła Szkoła<br>Panel Administracyjny</h2>
        
    </header>
    <a class="przycisk" href="./admin_panel.php">Strona Główna</a>
    <a class="przycisk" href="./dodaj_ucznia.php">Dodaj ucznia</a>

    <?php
    include('db_uczniowie.php');
    $baza = new db_uczniowie();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $id_ucznia=$_GET['id'];
            $baza->deleteUczen($id_ucznia);
        }
    }
    
    $baza->databaseConnect();
    $data = $baza->selectUczen();
    if (!empty($data)){
    
    ?>
    <div class="uczniowie">
        <?php
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='uczen' class='uczen'><p>Imię: ".$row['imie']."</p><p>Nazwisko: ".$row['nazwisko']."</p>PESEL: ".$row['PESEL']." <p>e-mail: ".$row['email']." </</p><p>uwagi: ".$row['uwagi']."</p>
                <button class='delete'><a href=uczniowie.php?del=True&id=".$row['id_ucznia'].">
                Usuń ucznia
                </a></button>
                </div>";
            }
            } else {
                echo "Brak uczniów";
            }
            $baza->close();
        ?>
    </div>
<!-- Formularz dodający ucznia do bazy danych, pole wyszukiwania uczniów, raport (tabela) po kliknięciu na przycisk będzie pokazywała wszystkich uczniów lub uczniów zaczynających się na określoną literę nazwiska lub imienia (wyszukiwanie ucznia) wraz z informacją jakie książki wypożyczył do tej pory i jakie książki ma wypożyczone, -->

</body>
</html>