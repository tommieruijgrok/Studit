<?php


$pageName = "Login";
?>

<html>
    <head>
        <link rel="stylesheet" href="index.css">
    </head>
    <?php
        include "../include/head.php";
    ?>
    <body>
        <?php
            include "../include/notification.php";
        ?>
        <div id="container" class="center">
            <div id="loginContainer" class="animate__animated animate__fadeInUp">
                <div id="loginHead">
                    <h2>Studit.</h2>
                </div>
                <form action="../process/login.php" method="POST">
                    <input type="text" name="email" placeholder="E-mailadres">
                    <input type="text" name="password" placeholder="Wachtwoord">
                    <input type="submit" value="Inloggen">
                </form>
            </div>

        </div>
    </body>
</html>