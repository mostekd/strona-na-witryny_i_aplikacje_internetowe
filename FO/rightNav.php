<div id="myNav" class="panel_prawy">
    <div class="zdjprawy">
        <?php
        include('../DB/db_zdj.php');
        $baza = new db_zdj();
        $baza->databaseConnect();
            $random_zdj = $baza->selectRandomZdj();
        if ($random_zdj) {
            echo '<img src="' . $random_zdj['path'] . '" alt="zdj_panel-prawy">';
        } else {
            echo '<p>No image found</p>';
        }
        ?>
        <script src="../js/pogoda.js"></script>
        <script src="../js/calendar.js"></script>
    </div>
</div>