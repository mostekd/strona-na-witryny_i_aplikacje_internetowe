<?php
class db_zdj extends db_connection{
    function insertZdj($path) {
        $query = "INSERT INTO zdj (path) VALUES ('$path')";
        return mysqli_query($this->connect, $query);
    }

    function selectMaxZdjId() {
        $query = "SELECT MAX(id) AS mmax FROM zdj";
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0) {
            while($row = mysqli_fetch_assoc($data)) {
                return $row['mmax'];
            }
        } else {
            return 0;
        }
    }

    function selectRandomZdj() {
        $max_id = $this->selectMaxZdjId();
        $random_id = rand(1, $max_id);
        $query = "SELECT path FROM zdj WHERE id = $random_id";
        $data = mysqli_query($this->connect, $query);
        if ($data && mysqli_num_rows($data) > 0) {
            return mysqli_fetch_assoc($data)['path'];
        } else {
            return false;
        }
    }
}
?>
