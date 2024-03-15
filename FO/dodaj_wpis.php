<?php
include('./header.php');
?>
        <?php
            include('../DB/db_wpisy_uzytkownika.php');
            $baza = new db_wpisy_uzytkownika();

            if(!empty($_GET)){
                $baza->databaseConnect();
                if(isset($_GET['del']))
                {
                    $id_wpisu_urzytkownika=$_GET['id'];
                    $baza->deleteWpisUrzytkownika($id_wpisu_urzytkownika);
                }
                if(isset($_GET['opcja'])){
                    if($_GET['opcja'] == 'dodaj'){
                        $tytul = $_GET['tytul'];
                        $tresc = $_GET['tresc'];
                        $autor = $_GET['autor'];
                        $baza->insertWpisUrzytkownika($tytul, $tresc, $autor);
                    }
                }
            }
        ?>
        <form class="MyForm">
            <input type=text name="tytul" placeholder="tytul" id="tytul" class="tytul"></input>
            <textarea type=text name="tresc" placeholder="tresc" id="tresc" class="tresc"></textarea>
            <input type=text name="autor" placeholder="autor" id="autor" class="autor"></input>
            <input type=hidden name="opcja" id="opcja" class="opcja" value='dodaj'></input>
            <input type="submit"></input>
            <input type="reset"></input>
        </form>
        <script src="../js/pogoda.js"></script>
        <script src="../js/calendar.js"></script>
    </body>
</html>