<?php
session_start();
include "../classes/User.php";
$user = new User($_SESSION['user']);

if (!in_array($user->type, $accessTypes)){
    header("location: ../home");
}
