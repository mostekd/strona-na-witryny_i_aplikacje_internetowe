<div id="myNav" class="panel_prawy">
    <div class="">
        <?php
        include('../DB/db_zdj.php');
        $baza = new db_zdj();
            $random_zdj = $baza->selectRandomZdj();
        if ($random_zdj) {
            echo '<img src="' . $random_zdj['url'] . '" alt="zdj_panel-prawy">';
        } else {
            echo '<p>No image found</p>';
        }
        ?>
        <script src="../js/pogoda.js"></script>
        <script src="../js/calendar.js"></script>
        <p>test</p>
    </div>
</div>