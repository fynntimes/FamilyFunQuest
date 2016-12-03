<?php
/**
 * Establishes a connection to the database.
 * @author Faizaan A. Datoo
 */

$link = mysqli_connect('localhost', 'root', 'root', 'fbla');
if (mysqli_connect_errno()) {
    die("MySQL error! " . mysqli_connect_error());
}

// Generate necessary tables if they don't already exist
$query = "CREATE TABLE IF NOT EXISTS `fbla`.`parties` ( `id` INT NOT NULL AUTO_INCREMENT , `type` TEXT NOT NULL , `duration` INT NOT NULL , `startTime` INT NOT NULL , `endTime` INT NOT NULL , `date` TEXT NOT NULL , `guests` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;";
mysqli_query($link, $query);