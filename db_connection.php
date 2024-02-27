<?php
function connect()
    {
        $host = "localhost"; // Host bazy danych
        $dbname = "wiai"; // Nazwa bazy danych
        $username = "root"; // Nazwa użytkownika bazy danych
        $password = ""; // Hasło użytkownika bazy danych

        try {
            $con = mysqli_connect($host, $username, $password,$dbname);
        }
        catch (PDOException $e) {
            die("Błąd połączenia z bazą danych: " . $e->getMessage());
        }
        return $con;
    }
?>
