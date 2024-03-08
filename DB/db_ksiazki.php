<?php
include('db_connection.php');
class db_ksiazki extends db_connection{
    
    function selectKsiazki(){
        $query = 'SELECT * FROM `ksiazki` WHERE 1';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }

    function insertKsiazka($tytul, $autor, $wydawnictwo, $rok_wydania, $isbn, $aktywna, $uwagi){
        $query = "INSERT INTO `ksiazki`(`tytul`, `autor`, `wydawnictwo`, `rok_wydania`, `isbn`, `aktywna`, `uwagi`) VALUES ('".$tytul."','".$autor."','".$wydawnictwo."','".$rok_wydania."','".$isbn."','".$aktywna."','".$uwagi."');";
        $data = mysqli_query($this->connect, $query);
        $this->close();
    }

    function deleteKsiazka($id_ksiazki){
            $query = "Delete from ksiazki where id_ksiazki =".$id_ksiazki.";";
            $data = mysqli_query($this->connect, $query);
            unset($_GET['id']);
            header('location: ./lista_ksiazki.php');   
            $this->close();
    }

    function updateKsiazka($id_ksiazki, $tytul, $autor, $wydawnictwo, $rok_wydania, $isbn, $aktywna, $uwagi){
        $query = "UPDATE `ksiazki` SET `tytul`='".$tytul."',`autor`='".$autor."',`wydawnictwo`='".$wydawnictwo."',`rok_wydania`='".$rok_wydania."',`isbn`='".$isbn."',`aktywna`='".$aktywna."',`uwagi`='".$uwagi."' WHERE `id_ksiazki` = ".$id_ksiazki.";";

        $data = mysqli_query($this->connect, $query);
		
		unset($_GET['id']);
        header('location: ../BO/lista_ksiazki.php');   
        $this->close();
    }

    function selectKsiazkaByID($id_ksiazki){
        $query = "SELECT * FROM `ksiazki` WHERE id_ksiazki =".$id_ksiazki;
		$data = mysqli_query($this->connect, $query);
		
		if (mysqli_num_rows($data) > 0) {
            return $data;
        }
    }

}
?>