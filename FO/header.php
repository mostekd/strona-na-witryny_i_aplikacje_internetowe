<div class="header-container">
    <h2>Biblioteka Wesoła Szkoła</h2>
    <?php
    include('../DB/db_zdj.php');
    $db = new db_zdj();
    for ($i = 1; $i <= 3; $i++) {
        $img = $db->selectRandomZdj();
        echo "<img src='../FO/uploads/$img' alt='zdj$i'>";
    }
    ?>
</div>
