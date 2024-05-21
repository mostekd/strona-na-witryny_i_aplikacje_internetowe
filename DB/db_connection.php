<?php
class db_connection{
    public $connect;

    var $host = "localhost"; // Host bazy danych
    var $dbname = "wiai"; // Nazwa bazy danych
    var $username = "root"; // Nazwa użytkownika bazy danych
    var $password = ""; // Hasło użytkownika bazy danych

    public function databaseConnect(){
        $con = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        if(!$con){
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
            $this->connect = $con;
        }
    }

    public function close(){
        mysqli_close($this->connect);
    }
}
?>