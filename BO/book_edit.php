<?php
include('./head_admin.php');
?>
        <div class="panel_lewy">
            <a class="przycisk" href="./lista_ksiazki.php"><i class="fa-solid fa-book" style="color: #fff;"></i> Książki</a>
        </div>

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
                        echo "<form class='MyForm' action='./lista_ksiazki.php' method = 'get'>
							<input type=text name='tytul' placeholder='tytuł' id='tytul' class='tytul' value=".$row['tytul']."></input>
							<input type=text  name='autor' placeholder='autor' id='autor' class='autor' value=".$row['autor']."></input>
							<input type=text name='wydawnictwo' placeholder='wydawnictwo' id='wydawnictwo' class='wydawnictwo' value=".$row['wydawnictwo']."></input>
							<input type=month name='rok_wydania' placeholder='rok wydania' id='rok_wydania' class='rok_wydania' value=".$row['rok_wydania']."></input>
							<input type=text name='isbn' placeholder='isbn' id='isbn' class='isbn' value=".$row['isbn']."></input>
							<textarea type=text name='uwagi' placeholder='uwagi' id='uwagi' class='uwagi'>".$row['uwagi']."</textarea>";
						$test = 0;
						if($row['aktywna'] == 1){
							echo "Aktywna: <input type=checkbox checked='checked' name='aktywna' placeholder='aktywna' id='aktywna' class='aktywna' value=".$test."></input>";
						}
						else{
							echo "Aktywna: <input type=checkbox name='aktywna' placeholder='aktywna' id='aktywna' class='aktywna' value=".$test."></input>";
                        }
						echo "<input type=hidden name='id_ksiazki' id='id_ksiazki' class='id_ksiazki' value=".$row['id_ksiazki']."></input>
							<input type=hidden name='opcja' id='opcja' class='opcja' value='edytuj'></input>
							<input type='submit'></input>
							</form>";
                    }
                }
            }
        ?>

        
    </body>
</html>