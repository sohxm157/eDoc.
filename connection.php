<?php
$database_host = 'localhost';
$database_user = 'root';
$database_pass = '';
$database_name = 'edoc_system';


$database = new mysqli($database_host, $database_user, $database_pass, $database_name);


if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
}
?>
