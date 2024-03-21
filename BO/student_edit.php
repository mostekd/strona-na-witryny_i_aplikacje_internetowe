<?php
include('./head_admin.php');
?>
        <div class="panel_lewy">
            <a class="przycisk" href="./lista_uczniowie.php"><i class="fa-regular fa-user" style="color: #fff;"></i> Uczniowie</a>
        </div>

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
                        echo "<form class='MyForm' action='./lista_uczniowie.php' method = 'get'>
                        <input type=text name='imie' placeholder='imię' id='imie' class='imie' value=".$row['imie']."></input>
                        <input type=text name='nazwisko' placeholder='nazwisko' id='nazwisko' class='nazwisko' value=".$row['nazwisko']."></input>
                        <input type=text  name='PESEL' placeholder='PESEL' id='PESEL' class='PESEL' value=".$row['PESEL']."></input>
                        <input type=text name='email' placeholder='email' id='email' class='email' value=".$row['email']."></input>
                        <textarea type=text name='uwagi' placeholder='uwagi' id='uwagi' class='uwagi'>".$row['uwagi']."</textarea>
                        <input type=hidden name='id_ucznia' id='id_ucznia' class='id_ucznia' value=".$row['id_ucznia']."></input>
                        <input type=hidden name='opcja' id='opcja' class='opcja' value='edytuj'></input><input type='submit'></input>
                        </form>";
                    }
                }
            }
        ?>

        
    </body>
</html>
