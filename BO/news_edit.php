<?php
include('./head_admin.php');
?>
        <div class="panel_lewy">
            <a class="przycisk" href="./news_list.php"><i class="fa-regular fa-newspaper" style="color: #fff;"></i> Wpisy</a>
        </div>

        <?php
         include('../DB/db_artykuly.php');
         $baza = new db_artykuly();
         
            if(!empty($_GET)){                
                $baza->databaseConnect();
                $artykul_id=$_GET['id'];
                $data = $baza->selectArtykulByID($artykul_id);
                if (!empty($data)){
                    while($row = mysqli_fetch_assoc($data))
                    {
                        echo "<form class='MyForm' action='./news_list.php' method = 'get'>";
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
