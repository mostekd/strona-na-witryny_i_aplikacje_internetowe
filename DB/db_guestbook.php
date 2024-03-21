<?php
include('db_connection.php');
class db_guestbook extends db_connection{
    
    function deleteGuestbookByID($id_wpisu_urzytkownika){
        $query = "Delete from artykul where id_wpisu_urzytkownika =".$id_wpisu_urzytkownika.";";
        $data = mysqli_query($this->connect, $query);
        unset($_GET['id']);
        header('location: ../BO/lista_wpisy_goscia.php');   
        $this->close();
    }

    function selectGuestbookAll(){
        $query = 'SELECT * FROM `wpisy_urzytkownika` ORDER BY id_wpisu_urzytkownika DESC';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }

    function selectGuestbookActive(){
        $query = "SELECT `tytul`, `tresc`, `autor`, `data` FROM `wpisy_urzytkownika` WHERE `aktywny` = 1";
        $data = mysqli_query($this->connect, $query);
	    if (mysqli_num_rows($data) > 0) {
            return $data;
        }
    }

    function insertGuestbook($tytul, $tresc, $autor){
        $date = date('Y-m-d H:i:s');
        $query = "INSERT INTO `wpisy_urzytkownika`(`tytul`, `tresc`, `autor`, `data`, `aktywny`)VALUES ('".$tytul."','".$tresc."','".$autor."','".$date."',0);";
        $data = mysqli_query($this->connect, $query);
        $this->close();
        header('location: index.php?id=searchGuests'); 
    }

    function updateGuestbookByID($id_wpisu_urzytkownika, $tytul, $tresc, $autor, $aktywny){
        $query = "UPDATE `wpisy_urzytkownika` SET `title`='".$tytul."',`tresc`='".$tresc."',`autor`='".$autor."',`aktywny'".$aktywny."' WHERE `id_wpisu_urzytkownika`=".$id_wpisu_urzytkownika.";";
		$data = mysqli_query($this->connect, $query);
		unset($_GET['id']);
        header('location: ../BO/lista_wpisy_goscia.php');   
        $this->close();
    }
}
?>