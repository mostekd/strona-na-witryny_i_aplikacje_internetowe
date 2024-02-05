<?php
$host = "localhost"; // Host bazy danych
$dbname = "wiai"; // Nazwa bazy danych
$username = "root"; // Nazwa użytkownika bazy danych
$password = ""; // Hasło użytkownika bazy danych

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Błąd połączenia z bazą danych: " . $e->getMessage());
}
?>
