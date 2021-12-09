<?php
session_start();
include "../include/config.php";
include "../classes/User.php";

if (isset($_POST['email']) && isset($_POST['password'])){

    $result = $conn->query("SELECT user FROM users WHERE email = '" . $_POST['email'] . "' AND password = '" . sha1($_POST['password']) . "'");
    if ($result->num_rows > 0) {
        $_SESSION['login_status'] = true;
        while($row = $result->fetch_assoc()) {
            $_SESSION['user'] = $row['user'];
            header("location: ../dashboard");
        }
    } else {
        header("Location: ../login?error=Helaas, de gegevens waren onjuist!");
    }

} else {
    header("Location: ../login?error=U heeft nog niet alle gegevens ingevuld!");
}