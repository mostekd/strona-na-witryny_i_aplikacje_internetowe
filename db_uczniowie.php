<?php
include('db_connection.php');
class db_ksiazki extends db_connection{

    function insertUczen(){
        $query = 'INSERT INTO `uczen`(`imie`, `nazwisko`, `PESEL`, `email`, `uwagi`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]';';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }
}
?>