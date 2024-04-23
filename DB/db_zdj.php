<?php
include('db_connection.php');
class db_zdj extends db_connection{
    function selectMaxZdjId{
        $query = "SELECT MAX(id) FROM `zdj`";
        $data = mysqli_query($this->connect, $query);
    }

    function selectZdj($id){
        $query = "SELECT * FROM `zdj` WHERE id = $id";
        $data = mysqli_query($this->connect, $query);
        if ($data && mysqli_num_rows($data) > 0){
            return mysqli_fetch_assoc($data);
        } else {
            return false;
        }
    }
}
    ?>