<?php
class db_connection{
    private $connect;

    var $host = "localhost"; // Host bazy danych
    var $dbname = "wiai"; // Nazwa bazy danych
    var $username = "root"; // Nazwa użytkownika bazy danych
    var $password = ""; // Hasło użytkownika bazy danych

    function databaseConnect(){
        $con = mysqli_connect($this->host, $this->username, $this->password, $this->dbname);
        if(!$con){
            die("Connection failed: " . mysqli_connect_error());
        }
        else{
            $this->connect = $con;
        }
    }

    function deleteArtykul($artykul_id){
        $query = 'Delete from artykul where artykul_id ='.$artykul_id;
        $data = mysqli_query($this->connect, $query);
        unset($_GET['id']);
        header('location: wpisy_admin.php');   
        $this->close();
    }

    function selectArtykul(){
        $query = 'SELECT `artykul_id`, `title`, `tresc`, `link`, `autor` FROM `artykul` WHERE 1';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }

    function insertArtykul($tytul, $tresc, $link, $autor){
        $dateTest = date('Y-m-d H:i:s');
        $query = "INSERT INTO `artykul`(`title`, `tresc`, `link`, `autor`, `data`) VALUES ('".$tytul."','".$tresc."','".$link."','".$autor."','".$dateTest."')";
        $data = mysqli_query($this->connect, $query);
        $this->close();
    }

    function insertKsiazka(){
        $query = "INSERT INTO `ksiazki`(`tytul`, `wydawnictwo`, `rok_wydania`, `isbn`, `aktywna`) VALUES ('".$tytul."','".$wydawnictwo."','".$rok_wydania."','".$ibsn."','".$aktywna."')";
        $data = mysqli_query($this->connect, $query);
        $this->close();
    }

    function deleteKsiazka(){
            $query = 'Delete from ksiazki where id_ksiazka ='.$id_ksiazki;
            $data = mysqli_query($this->connect, $query);
            unset($_GET['id']);
            header('location: dodaj_ksiazki.php');   
            $this->close();
    }

    function close(){
        mysqli_close($this->connect);
    }
}
?>