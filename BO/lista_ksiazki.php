<?php
include('./head_admin.php');
?>
    <div class="panel_lewy">
    <a class="przycisk" href="./admin_panel.php"><i class="fa-solid fa-house" style="color: #fff;"></i> Strona główna</a>
    <a class="przycisk" href="./dodaj_ksiazka.php"><i class="fa-solid fa-book-open" style="color: #fff;"></i> Dodaj książkę</a>
    </div>

    <?php
    include('../DB/db_ksiazki.php');
    $baza = new db_ksiazki();

    if(!empty($_GET)){
        $baza->databaseConnect();
        if(isset($_GET['del']))
        {
            $id_ksiazki=$_GET['id'];
            $baza->deleteKsiazka($id_ksiazki);
        }
        if(isset($_GET['opcja'])){
            if($_GET['opcja'] == 'dodaj'){
                $tytul = $_GET['tytul'];
                $autor = $_GET['autor'];
                $wydawnictwo = $_GET['wydawnictwo'];
                $rok_wydania = $_GET['rok_wydania'];
                $isbn = $_GET['isbn'];
                $aktywna = 0;
                if(isset($_GET['aktywna'])){
                   $aktywna = 1;
                }
                $uwagi = $_GET['uwagi'];
                $baza->insertKsiazka($tytul, $autor, $wydawnictwo, $rok_wydania, $isbn, $aktywna, $uwagi);
            }
            elseif($_GET['opcja'] == 'edytuj'){
                $tytul = $_GET['tytul'];
                $autor = $_GET['autor'];
                $wydawnictwo = $_GET['wydawnictwo'];
                $rok_wydania = $_GET['rok_wydania'];
                $isbn = $_GET['isbn'];
                $aktywna = 0;
                if(isset($_GET['aktywna'])){
                   $aktywna = 1;
                }
                $uwagi = $_GET['uwagi'];
                $id_ksiazki = $_GET['id_ksiazki'];
                $baza->updateKsiazka($id_ksiazki, $tytul, $autor, $wydawnictwo, $rok_wydania, $isbn, $aktywna, $uwagi);
            }
        }
        else{
            echo "<p>Książki nie ma w naszej bazie</p>";
        }
    }
    
    $baza->databaseConnect();
    $data = $baza->selectKsiazki();
    if (!empty($data)){
    
    ?>
    <div class="wpisy">
        <?php
            while($row = mysqli_fetch_assoc($data))
            {
                echo "<div id='wpis' class='artykul'>Tytuł: ".$row['tytul']." Autor: ".$row['autor']." Wydawnictwo: ".$row['wydawnictwo']." Rok wydania: ".$row['rok_wydania']." ISBN: ".$row['isbn']." Aktywna: ".$row['aktywna']." Uwagi: ".$row['uwagi']."
                <button class='delete'><a href=lista_ksiazki.php?del=True&id=".$row['id_ksiazki'].">
                Usuń książke
                </a></button>
                <button class='delete'><a href=edytuj_ksiazke.php?id=".$row['id_ksiazki'].">
                Edytuj książke
                </a></button>
                </div>";
            }
            } else {
                echo "Brak książek";
            }
            $baza->close();
        ?>
    </div>
</body>
</html>
