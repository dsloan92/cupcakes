<?php

/** Name: Dallas Sloan
 *  Date Jan 12, 2019
 *  validation.php
 * Validation of cupcakes form
 */
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//including function file
include ("function.php");
//creating valid variable
$isValid = true;

//validate name field
if(!empty($name)){
    return;
}
else{
    echo"<p>Name must be entered!</p>";
    $isValid = false;
}

if (isset($flavors)) {
    foreach ($flavors as $flavor) {
        if (array_key_exists($flavor, $cupcakeFlavors)) {
            return;
        } else {
            echo "<p>Please select a valid cupcake flavor!";
            $isValid = false;
        }
    }
}
    else{
        echo"<p>Please select a valid cupcake flavor!";
        $isValid = false;
    }


