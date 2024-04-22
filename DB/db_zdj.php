<?php
include('db_connection.php');
class db_zdj extends db_connection{
    function selectUczen(){
        $query = 'SELECT * FROM `zdj` WHERE';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
		return $data;
        }
    }
}
    ?>