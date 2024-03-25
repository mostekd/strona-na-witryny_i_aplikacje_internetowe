<?php
include('db_connection.php');
class db_book extends db_connection{
    
    function selectBookAll(){
        $query = 'SELECT * FROM `book` WHERE 1';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }
    
    function selectBookByID($idbook){
        $query = "SELECT * FROM `book` WHERE id_book =".$idbook;
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0) {
            return $data;
        }
    }

    function selectBookByActive(){
        $query = "SELECT `title`, `author`, `publisher`, `publishYear` FROM `book` WHERE `active` = 1";
        $data = mysqli_query($this->connect, $query);
	    if (mysqli_num_rows($data) > 0) {
            return $data;
        }
    }

    function selectBookBy($text){
        $query = "SELECT * FROM `book` WHERE `title` like '%".$text."%' or `author` like '%".$text."%';";
        $data = mysqli_query($this->connect, $query);
	    if (mysqli_num_rows($data) > 0) {
            return $data;
        }
    }

    function insertBook($title, $author, $publisher, $publishYear, $isbn, $active, $comment){
        $query = "INSERT INTO `book`(`title`, `author`, `publisher`, `publishYear`, `isbn`, `active`, `comments`) VALUES ('".$title."','".$author."','".$publisher."','".$publishYear."','".$isbn."','".$active."','".$comment."');";
        $data = mysqli_query($this->connect, $query);
        $this->close();
        header('location: ./book_list.php'); 
    }

    function deleteBookByID($idbook){
        $query = "DELETE FROM `book` WHERE id_book =".$idbook.";";
        $data = mysqli_query($this->connect, $query);
        unset($_GET['id']);
        $this->close();
        header('location: ./book_list.php');   
    }

    function updateBookByID($idbook, $title, $author, $publisher, $publishYear, $isbn, $active, $comment){
        $query = "UPDATE `book` SET `title`='".$title."',`author`='".$author."',`publisher`='".$publisher."',`publishYear`='".$publishYear."',`isbn`='".$isbn."',`active`='".$active."',`comments`='".$comment."' WHERE `id_book` = ".$idbook.";";
        $data = mysqli_query($this->connect, $query);	
	    unset($_GET['id']);
        $this->close();
        header('location: ../BO/book_list.php');
    }

}
?>
