<?php
include('db_connection.php');
class db_ksiazki extends db_connection{
    
    function selectKsiazki(){
        $query = 'SELECT `id_ksiazki`, `tytul`, `wydawnictwo`, `rok_wydania`, `isbn`, `aktywna`, `uwagi` FROM `ksiazki` WHERE 1';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }

    function insertKsiazka($tytul, $wydawnictwo, $rok_wydania, $isbn, $aktywna){
        $query = "INSERT INTO `ksiazki`(`tytul`, `wydawnictwo`, `rok_wydania`, `isbn`, `aktywna`) VALUES ('".$tytul."','".$wydawnictwo."','".$rok_wydania."','".$isbn."','".$aktywna."');";
        $data = mysqli_query($this->connect, $query);
        $this->close();
    }

    function deleteKsiazka($id_ksiazki){
            $query = "Delete from ksiazki where id_ksiazka =".$id_ksiazki.";";
            $data = mysqli_query($this->connect, $query);
            unset($_GET['id']);
            header('location: dodaj_ksiazki.php');   
            $this->close();
    }

    function updateKsiazka($tytul, $wydawnictwo, $rok_wydania, $isbn, $aktywna, $uwagi){
        $query = "UPDATE `ksiazki` SET `tytul`='".$tytul."',`wydawnictwo`='".$wydawnictwo."',`rok_wydania`='".$rok_wydania."',`isbn`='".$isbn."',`aktywna`='".$aktywna."',`uwagi`='".$uwagi.";";
    }

}
?>