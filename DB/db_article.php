<?php
class db_article extends db_connection{
    
    function deleteArticle($article_id){
        $query = "Delete from article where article_id =".$article_id.";";
        $data = mysqli_query($this->connect, $query);
        unset($_GET['id']);
        header('location: ../BO/news_list.php');   
        $this->close();
    }

    function selectArticle(){
        $query = 'SELECT * FROM `article` ORDER BY article_id DESC';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }

    function insertArticle($title, $text, $link, $author){
        $dateTest = date('Y-m-d H:i:s');
        $query = "INSERT INTO `article`(`title`, `text`, `link`, `author`, `data`) VALUES ('".$title."','".$text."','".$link."','".$author."','".$dateTest."');";
        $data = mysqli_query($this->connect, $query);
        header('location: ../BO/news_list.php'); 
        $this->close();
    }
    
    function selectArticleByID($article_id){
        $query = "SELECT * FROM `article` WHERE article_id =".$article_id;
		$data = mysqli_query($this->connect, $query);
		
		if (mysqli_num_rows($data) > 0) {
            return $data;
        }
    }

    function updateArticle($article_id, $title, $text, $link, $author){
        $query = "UPDATE `article` SET `title`='".$title."',`text`='".$text."',`link`='".$link."',`author`='".$author."' WHERE `article_id`=".$article_id.";";
		$data = mysqli_query($this->connect, $query);
		unset($_GET['id']);
        header('location: ../BO/news_list.php');   
        $this->close();
    }
}
?>