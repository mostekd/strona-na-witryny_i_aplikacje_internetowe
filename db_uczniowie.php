<?php
include('db_connection.php');
class db_uczniowie extends db_connection{
    function insertUczen($imie, $nazwisko, $PESEL, $email, $uwagi){
        $query = "INSERT INTO `uczen`(`imie`, `nazwisko`, `PESEL`, `email`, `uwagi`) VALUES ('"$imie."','".$nazwisko."','".$PESEL."','".$email."','".$uwagi."');";
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }

    function deleteUczen($id_ucznia){
        $query = 'Delete from artykul where artykul_id ='.$id_ucznia;
        $data = mysqli_query($this->connect, $query);
        unset($_GET['id']);
        header('location: uczniowie.php');   
        $this->close();
    }

    function selectUczen(){
        $query = 'SELECT * FROM `uczen` WHERE 1';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }
}
?>
