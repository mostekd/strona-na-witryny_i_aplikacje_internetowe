<?php
include('db_connection.php');
class db_artykuly extends db_connection{
    
    function deleteArtykul($artykul_id){
        $query = 'Delete from artykul where artykul_id ='.$artykul_id;
        $data = mysqli_query($this->connect, $query);
        unset($_GET['id']);
        header('location: ../BO/lista_wpisy.php');   
        $this->close();
    }

    function selectArtykul(){
        $query = 'SELECT * FROM `artykul` ORDER BY artykul_id DESC';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
            return $data;
        }
    }

    function insertArtykul($tytul, $tresc, $link, $autor){
        $dateTest = date('Y-m-d H:i:s');
        $query = "INSERT INTO `artykul`(`title`, `tresc`, `link`, `autor`, `data`) VALUES ('".$tytul."','".$tresc."','".$link."','".$autor."','".$dateTest."');";
        $data = mysqli_query($this->connect, $query);
        $this->close();
    }
    
    function selectArtykulByID($artykul_id){
        $query = "SELECT `artykul_id`, `title`, `tresc`, `link`, `autor` FROM `artykul` WHERE artykul_id =".$artykul_id;
		$data = mysqli_query($this->connect, $query);
		
		if (mysqli_num_rows($data) > 0) {
            return $data;
        }
    }

    function updateArtykul($artykul_id, $tytul, $tresc, $link, $autor){
        $query = "UPDATE `artykul` SET `title`='".$tytul."',`tresc`='".$tresc."',`link`='".$link."',`autor`='".$autor."' WHERE `artykul_id`=".$artykul_id.";";
		$data = mysqli_query($this->connect, $query);
		
		unset($_GET['id']);
        header('location: ../BO/lista_wpisy.php');   
        $this->close();
    }
}
?>