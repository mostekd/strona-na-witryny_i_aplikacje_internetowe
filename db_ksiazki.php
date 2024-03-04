<?php
class db_ksiazki extends db_connection{
    
    function selectKsiazki(){
        $query = 'SELECT `id_ksiazki`, `tytul`, `wydawnictwo`, `rok_wydania`, `isbn`, `aktywna`, `uwagi` FROM `ksiazki` WHERE 1';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }

    function insertKsiazka(){
        $query = "INSERT INTO `ksiazki`(`tytul`, `wydawnictwo`, `rok_wydania`, `isbn`, `aktywna`) VALUES ('".$tytul."','".$wydawnictwo."','".$rok_wydania."','".$ibsn."','".$aktywna."');";
        $data = mysqli_query($this->connect, $query);
        $this->close();
    }

    function deleteKsiazka(){
            $query = "Delete from ksiazki where id_ksiazka =".$id_ksiazki.";";
            $data = mysqli_query($this->connect, $query);
            unset($_GET['id']);
            header('location: dodaj_ksiazki.php');   
            $this->close();
    }

    function updateKsiazka(){
        $query = "UPDATE `ksiazki` SET `tytul`='".$tytul."',`wydawnictwo`='".$wydawnictwo."',`rok_wydania`='".$rok_wydania."',`isbn`='".$ibsn."',`aktywna`='".$aktywna."',`uwagi`='".$uwagi.";";
    }

}
?>