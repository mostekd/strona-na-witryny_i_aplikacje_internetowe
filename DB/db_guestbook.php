<?php
class db_guestbook extends db_connection{
    
    function deleteGuestbookByID($id_guestbook){
        $query = "DELETE FROM guestbook WHERE id_guestbook =" . $id_guestbook;
        $data = mysqli_query($this->connect, $query);
        unset($_GET['id']);
        header('location: ../BO/guestbook_list.php');   
        $this->close();
    }

    function selectGuestbookAll(){
        $query = 'SELECT * FROM `guestbook` ORDER BY id_guestbook DESC';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }

    function selectGuestbookByID($id_guestbook){
        $query = "SELECT * FROM `guestbook` WHERE id_guestbook =".$id_guestbook;
        $data = mysqli_query($this->connect, $query);
        
        if (mysqli_num_rows($data) > 0) {
            return $data;
        } else {
            return false;
        }
    }

    function selectGuestbookActive(){
        $query = "SELECT `title`, `text`, `author`, `data` FROM `guestbook` WHERE `active` = 1";
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0) {
            return $data;
        }
    }

    function insertGuestbook($title, $text, $author){
        $date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `guestbook`(`title`, `text`, `author`, `data`, `active`) VALUES ('".$title."','".$text."','".$author."','".$date."',0)";
        $data = mysqli_query($this->connect, $query);
        $this->close();
        header('location: index.php?id=searchGuests'); 
    }

    function updateGuestbookByID($id_guestbook, $title, $text, $author, $active){
        $query = "UPDATE `guestbook` SET `title`='".$title."', `text`='".$text."', `author`='".$author."', `active`='".$active."' WHERE `id_guestbook`=".$id_guestbook;
        $data = mysqli_query($this->connect, $query);
        unset($_GET['id_guestbook']);
        header('location: ../BO/guestbook_list.php');   
        $this->close();
    }
}
?>