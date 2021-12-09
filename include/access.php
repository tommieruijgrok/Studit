<?php
session_start();
include "../classes/User.php";
$user = new User($_SESSION['user']);
if ($_SESSION['login_status'] != true){
    header("location: ../login");
} /*else if (!in_array($user->type, $accessTypes)){
    header("location: ../home");
}*/
