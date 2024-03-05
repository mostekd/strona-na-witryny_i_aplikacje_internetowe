<?php
include('db_connection.php');
class db_ksiazki extends db_connection{

    function insertUczen($imie, $nazwisko, $PESEL, $email, $uwagi){
        $query = 'INSERT INTO `uczen`(`imie`, `nazwisko`, `PESEL`, `email`, `uwagi`) VALUES ('$imie','$nazwisko','$PESEL','$email','$uwagi';';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }
}
?>
