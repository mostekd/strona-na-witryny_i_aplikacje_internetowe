<?php
include('./head_admin.php');
?>
        <div class="panel_lewy">
            <a class="przycisk" href="./news_list.php"><i class="fa-regular fa-newspaper" style="color: #fff;"></i> Wpisy</a>
        </div>

        <?php
         include('../DB/db_article.php');
         $baza = new db_article();;
         
            if(!empty($_GET)){                
                $baza->databaseConnect();
                $article_id=$_GET['id'];
                $data = $baza->selectArticleByID($article_id);
                if (!empty($data)){
                    while($row = mysqli_fetch_assoc($data))
                    {
                        echo "<form class='MyForm' action='./news_list.php' method = 'get'>";
                        echo "<input type=text name='title' placeholder='tytuł' id='title' class='title' value=".$row['title']."></input>";
                        echo "<textarea type=text name='text' placeholder='treść' id='text' class='text'>".$row['text']."</textarea>";
                        echo "<input type=url  name='link' placeholder='link' id='link' class='link' value=".$row['link']."></input>";
                        echo "<input type=text name='author' placeholder='autor' id='author' class='author' value=".$row['author']."></input>";
                        echo "<input type=hidden name='article_id' id='article_id' class='article_id' value=".$row['article_id']."></input>";
                        echo "<input type=hidden name='opcja' id='opcja' class='opcja' value='edytuj'></input>";
                        echo "<input type='submit'></input>";
                        echo "</form>";
                    }
                }
            }
        ?>

        
    </body>
</html>
