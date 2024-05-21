<?php
include('./head_admin.php');
?>
        <div class="panel_lewy">
            <a class="przycisk" href="./book_list.php"><i class="fa-solid fa-book" style="color: #fff;"></i> Książki</a>
        </div>

        <?php
         include('../DB/db_book.php');
         $baza = new db_book();
         
            if(!empty($_GET)){                
                $baza->databaseConnect();
                $idbook=$_GET['id'];
                $data = $baza->selectBookByID($idbook);
                if (!empty($data)){
                    while($row = mysqli_fetch_assoc($data))
                    {
                        echo "<form class='MyForm' action='./book_list.php' method = 'get'>
							<input type=text name='title' placeholder='tytuł' id='title' class='title' value=".$row['title']."></input>
							<input type=text  name='author' placeholder='autor' id='author' class='author' value=".$row['author']."></input>
							<input type=text name='publisher' placeholder='wydawnictwo' id='publisher' class='publisher' value=".$row['publisher']."></input>
							<input type=month name='publishYear' placeholder='rok wydania' id='publishYear' class='publishYear' value=".$row['publishYear']."></input>
							<input type=text name='isbn' placeholder='isbn' id='isbn' class='isbn' value=".$row['isbn']."></input>
							<textarea type=text name='comments' placeholder='uwagi' id='comments' class='comments'>".$row['comments']."</textarea>";
						$test = 0;
						if($row['active'] == 1){
							echo "Aktywna: <input type=checkbox checked='checked' name='active' placeholder='aktywna' id='active' class='active' value=".$test."></input>";
						}
						else{
							echo "Aktywna: <input type=checkbox name='aktywna' placeholder='aktywna' id='aktywna' class='aktywna' value=".$test."></input>";
                        }
						echo "<input type=hidden name='id_book' id='id_book' class='id_book' value=".$row['id_book']."></input>
							<input type=hidden name='opcja' id='opcja' class='opcja' value='edytuj'></input>
							<input type='submit'></input>
							</form>";
                    }
                }
            }
        ?>

        
    </body>
</html>
