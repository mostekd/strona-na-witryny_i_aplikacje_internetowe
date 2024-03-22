<?php
include('db_connection.php');
class db_book extends db_connection{
    
    function selectBookAll(){
        $query = 'SELECT `idbook`, `title`, `author`, `publisher`, `publishYear`, `isbn`, `active`, `comment` FROM `book` WHERE 1';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }
    
    function selectBookByID($idbook){
        $query = "SELECT `idbook`, `title`, `author`, `publisher`, `publishYear`, `isbn`, `active`, `comment` FROM `book` WHERE idbook =".$idbook;
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

    function selectBookByTitle($title){
        $query = "SELECT `title`, `author`, `publisher`, `publishYear` FROM `book` WHERE `title` like '%".$title."%';";
        $data = mysqli_query($this->connect, $query);
	    if (mysqli_num_rows($data) > 0) {
            return $data;
        }
    }

    function insertBook($title, $author, $publisher, $publishYear, $isbn, $active, $comment){
        $query = "INSERT INTO `book`(`title`, `author`, `publisher`, `publishYear`, `isbn`, `active`, `comment`) VALUES ('".$title."','".$author."','".$publisher."','".$publishYear."','".$isbn."','".$active."','".$comment."');";
        $data = mysqli_query($this->connect, $query);
        $this->close();
        header('location: ./book_list.php'); 
    }

    function deleteBookByID($idbook){
        $query = "Delete from book where idbook =".$idbook.";";
        $data = mysqli_query($this->connect, $query);
        unset($_GET['id']);
        $this->close();
        header('location: ./book_list.php');   
    }

    function updateBookByID($idbook, $title, $author, $publisher, $publishYear, $isbn, $active, $comment){
        $query = "UPDATE `book` SET `title`='".$title."',`author`='".$author."',`publisher`='".$publisher."',`publishYear`='".$publishYear."',`isbn`='".$isbn."',`active`='".$active."',`comment`='".$comment."' WHERE `idbook` = ".$idbook.";";
        $data = mysqli_query($this->connect, $query);	
	    unset($_GET['id']);
        $this->close();
        header('location: ../BO/book_list.php');
    }

}
?>
