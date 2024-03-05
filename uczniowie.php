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
    <main>
        <br>Dodaj ucznia:
        <form>
            <input type=text name="imie" placeholder="imię" id="imie" class="imie"></input>
            <input type=text name="nazwisko" placeholder="nazwisko" id="nazwisko" class="nazwisko"></input>
            <input type=text name="PESEL" placeholder="PESEL" id="PESEL" class="PESEL"></input>
            <input type=email name="email" placeholder="e-mail" id="email" class="email"></input>
            <textarea type=text name="uwagi" placeholder="uwagi" id="uwagi" class="uwagi"></textarea>
            <input type="submit"></input>
        </form>
    </main>

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
        elseif(isset($_GET['imie'])){
            $imie = $_GET['imie'];
            $nazwisko = $_GET['nazwisko'];
            $PESEL = $_GET['PESEL'];
            $email = $_GET['email'];
            $uwagi = $_GET['uwagi'];
            $baza->insertUczen($imie, $nazwisko, $PESEL, $email, $uwagi);
        }
    }
    
    $baza->databaseConnect();
    $data = $baza->selectUczen();
    if (!empty($data)){
    
    ?>
    <div class="wpisy">
        <?php
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='uczen' class='uczen'>Imię: ".$row['imie']."Nazwisko: ".$row['nazwisko']."PESEL: ".$row['PESEL']."e-mail: ".$row['email']."uwagi: ".$row['uwagi']."
                <button class='delete'><a href=uczniowie.php?del=True&id=".$row['id_ucznia'].">
                Usuń ucznia
                </a></button>
                </div>";
            }
            } else {
                echo "Brak artykułów";
            }
            $baza->close();
        ?>
    </div>
<!-- Formularz dodający ucznia do bazy danych, pole wyszukiwania uczniów, raport (tabela) po kliknięciu na przycisk będzie pokazywała wszystkich uczniów lub uczniów zaczynających się na określoną literę nazwiska lub imienia (wyszukiwanie ucznia) wraz z informacją jakie książki wypożyczył do tej pory i jakie książki ma wypożyczone, -->

</body>
</html>