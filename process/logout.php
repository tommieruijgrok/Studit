<?php
session_start();
include "../include/config.php";
if ($conn->query("INSERT INTO logs (user, action) VALUES (" . $_SESSION['user'] . ", 'logout')") === TRUE) {
    session_destroy();
    header("location: ../login");
} else {
    header("location: ../dashboard?error=Er ging iets mis met uitloggen. Probeer het opnieuw!");
}



