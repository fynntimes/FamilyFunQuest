<?php
/**
 * Establish a connection to the MySQL database.
 * @author Faizaan A. Datoo
 */

$user = 'root';
$password = 'root';
$db = 'fbla';
$host = 'localhost';
$port = 3306;

$link = mysqli_init();
$success = mysqli_real_connect(
    $link,
    $host,
    $user,
    $password,
    $db,
    $port
);

if(!$success) {
    die("Error in establishing a connection to the MySQL database.");
}