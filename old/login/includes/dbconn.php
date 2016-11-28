<?php

// Extend this class to re-use db connection
class DbConn
{
    public $conn;

    public function __construct()
    {
        require 'dbconf.php';
        $this->host = $host; // Host name
        $this->username = $username; // Mysql username
        $this->password = $password; // Mysql password
        $this->db_name = $db_name; // Database name
        $this->tbl_prefix = $tbl_prefix; // Prefix for all database tables
        $this->tbl_members = $tbl_members;
        $this->tbl_attempts = $tbl_attempts;

        // Connect to server and select database.
        $this->conn = new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8', $username, $password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Create the tables
        $query =
            "CREATE TABLE IF NOT EXISTS `members` (
  `id` CHAR(23) NOT NULL,
  `username` VARCHAR(65) NOT NULL DEFAULT '',
  `password` VARCHAR(65) NOT NULL DEFAULT '',
  `email` VARCHAR(65) NOT NULL,
  `verified` TINYINT(1) NOT NULL DEFAULT '0',
  `mod_timestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS  `loginAttempts` (
  `IP` VARCHAR(20) NOT NULL,
  `Attempts` INT(11) NOT NULL,
  `LastLogin` DATETIME NOT NULL,
  `Username` VARCHAR(65) DEFAULT NULL,
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

        $this->conn->query($query);

    }
}
