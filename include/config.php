<?php
$db_hostname = 'rdbms.strato.de';
$db_username = 'dbu1067642';
$db_password = 'dA3e8Ez3e97LBW9YhtC5tbc9sqCZU5GasUEz5pWV6WR24paUfuxLwNbpEbnRzUyQMbXTAM';
$db_database = 'dbs5014406';

$conn = new mysqli($db_hostname, $db_username, $db_password, $db_database);

if ($conn->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected!";
}