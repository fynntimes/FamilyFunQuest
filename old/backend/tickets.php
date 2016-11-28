<?php
/**
 * Contains functions for managing tickets.
 *
 * @author Faizaan A. Datoo
 */

/**
 * Collect the customer's information from the form,
 * and store it into the customer database.
 *
 * @param $link mysqli
 * @param $name string
 * @param $street string
 * @param $town string
 * @param $state string
 * @param $zip_code string
 * @param $phone string
 * @param $email string
 * @return bool
 */
function collect_customer_information($link, $name, $street, $town, $state, $zip_code, $phone, $email)
{

    // Delete the row if it already exists
    mysqli_query($link, "DELETE FROM `customers` WHERE `name` = '{$name}'");

    // Insert the new customer's data

    $query = "INSERT INTO `customers` (`name`, `street`, `town`, `state`, `zip_code`, `phone_number`, `email`) VALUES ('{$name}', '{$street}', '{$town}', '{$state}', '{$zip_code}', '{$phone}', '{$email}')";

    $result = mysqli_query($link, $query);

    return $result;

}
