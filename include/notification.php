<?php

    if (isset($_GET['error'])){
        ?>
            <div id="notification">
                <div>
                    <p><i class="fas fa-exclamation-triangle"></i><?php echo $_GET['error'] ?></p>
                </div>
            </div>
        <?php
    }
?>