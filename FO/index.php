<?php
include('./header.php');
?>
    <div id="wpisy">
        <div class="link">
            <a href="./wszystkie_wpisy.php"><button>Pokaż wszystkie artykuły</button></a> 
        </div>
        <?php
            include('./wpisy.php');
        ?>
    </div>
<?php
    include('end_html.php')
?>