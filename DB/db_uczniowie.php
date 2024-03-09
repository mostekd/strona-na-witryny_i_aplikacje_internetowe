<?php
include('db_connection.php');
class db_uczniowie extends db_connection{
    function selectUczen(){
        $query = 'SELECT `id_ucznia`,`imie`, `nazwisko`, `PESEL`, `email`, `uwagi` FROM `uczen` WHERE 1';
        $data = mysqli_query($this->connect, $query);
        if (mysqli_num_rows($data) > 0){
		return $data;
        }
    }

    function insertUczen($imie, $nazwisko, $PESEL, $email, $uwagi){
        $query = "INSERT INTO `uczen`(`imie`, `nazwisko`, `PESEL`, `email`, `uwagi`) VALUES ('".$imie."','".$nazwisko."','".$PESEL."','".$email."','".$uwagi."');";
        $data = mysqli_query($this->connect, $query);
        $this->close();
    }

    function deleteUczen($id_ucznia){
	$query = "Delete from uczen where id_ucznia =".$id_ucznia.";";
	$data = mysqli_query($this->connect, $query);
	unset($_GET['id']);
	header('location: ./lista_uczniowie.php');   
	$this->close();
    }

    function updateUczen($id_ucznia, $imie, $nazwisko, $PESEL, $email, $uwagi){
        $query = "UPDATE `uczen` SET `imie`='".$imie."',`nazwisko`='".$nazwisko."',`PESEL`='".$PESEL."',`email`='".$email."',`uwagi`='".$uwagi."' WHERE `id_ucznia`=".$id_ucznia.";";
	$data = mysqli_query($this->connect, $query);
	unset($_GET['id']);
        header('location: ../BO/lista_uczniowie.php');   
        $this->close();
    }

    function selectUczenByID($id_ucznia){
        $query = "SELECT `id_ucznia`,`imie`, `nazwisko`, `PESEL`, `email`, `uwagi` FROM `uczen` WHERE id_ucznia =".$id_ucznia;
	$data = mysqli_query($this->connect, $query);

	if (mysqli_num_rows($data) > 0) {
		return $data;
	}
    }
    }
?>
