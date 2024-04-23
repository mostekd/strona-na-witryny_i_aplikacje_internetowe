<?php
include('db_connection.php');
class db_zdj extends db_connection {
    function selectMaxZdjId() {
        $query = "SELECT MAX(id) FROM `zdj`";
        $data = mysqli_query($this->connect, $query);
        $row = mysqli_fetch_assoc($data);
        return $row['max_id'];
    }

    function selectRandomZdj() {
        $max_id = $this->selectMaxZdjId();
        $random_id = rand(1, $max_id);
        $query = "SELECT `path` FROM `zdj` WHERE id = $random_id";
        $data = mysqli_query($this->connect, $query);
        if ($data && mysqli_num_rows($data) > 0) {
            return mysqli_fetch_assoc($data);
        } else {
            return false;
        }
    }
}
?>