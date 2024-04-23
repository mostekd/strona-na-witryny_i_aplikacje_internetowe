<?php
include('db_connection.php');
class db_zdj extends db_connection{
    function selectRandomZdj(){
        $query = 'SELECT * FROM `zdj` WHERE';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
		return $data;
        }
    }

    function selectZdj(){
        $query = 'SELECT * FROM `zdj` WHERE 1';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
		return $data;
        }
    }
}
    ?>