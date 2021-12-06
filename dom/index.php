<?php
include "../include/access.php";
include "../include/config.php";
include "../include/functions.php";

$pageName = "Home";
?>
<html>
    <head>
        <title><?php echo $pageName ?> | Studit</title>
    </head>
    <?php
        include "../include/head.php";
    ?>
    <body>
        <div id="container">
            <?php
                include "../include/sidebar.php";
            ?>
            <div id="content">
                <h2>DOM EL</h2>
            </div>
        </div>
    </body>
</html>
