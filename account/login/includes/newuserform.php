<?php

class NewUserForm extends DbConn
{
    public function createUser($usr, $uid, $email, $pw, $fname, $lname, $cardnum, $expiremonth, $expireyear, $cvv)
    {
        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;
            // prepare sql and bind parameters
            $stmt = $db->conn->prepare("INSERT INTO " . $tbl_members . " (`id`, `username`, `password`, `email`, `verified`, `mod_timestamp`, `first_name`, `last_name`, `card_number`, `expire_month`, `expire_year`, `cvv`) 
                                                                        VALUES (:id, :username, :password, :email, 0, CURRENT_TIMESTAMP, :first_name, :last_name, :card_number, :expire_month, :expire_year, :cvv)");
            $stmt->bindParam(':id', $uid);
            $stmt->bindParam(':username', $usr);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $pw);
            $stmt->bindParam(':first_name', $fname);
            $stmt->bindParam(':last_name', $lname);
            $stmt->bindParam(':card_number', $cardnum);
            $stmt->bindParam(':expire_month', $expiremonth);
            $stmt->bindParam(':expire_year', $expireyear);
            $stmt->bindParam(':cvv', $cvv);
            $stmt->execute();

            $err = '';

        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }
        //Determines returned value ('true' or error code)
        if ($err == '') {

            $success = 'true';

        } else {

            $success = $err;

        };

        return $success;

    }
}
