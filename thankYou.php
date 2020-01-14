<?php

/** Name: Dallas Sloan
 *  Date Jan 12, 2019
 *  thankYou.php
 * Thank you page showing user what was ordered
 */
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

//including functions file to have the cupcakeFlavors array handy
include ("function.php");

//var_dump($_POST);

//array(2) { ["name"]=> string(12) "Dallas Sloan" ["flavors"]=> array(1) { [0]=> string(11) "grasshopper" } }

//assign variables from POST array values
$name = $_POST["name"];
if(isset($_POST["flavors"])) {
    $flavors = $_POST["flavors"];
}
else{
    echo"<p>Please select a valid cupcake flavor!</p>";
}

include("validation.php");
if(isset($_POST["flavors"]) && $isValid){
    //echo Order back to Client
    echo"<div>Thank you, $name, for your order!</div>";
    echo"<br><div>&emsp;Order Summary:";
    //showing flavors ordered in a unordered list
    echo"<ul>";
            foreach ($flavors as $flavor) {
                echo "<li>$cupcakeFlavors[$flavor]</li>";
            }
        echo"</ul>
            </div>";
    //calculating cost based off $flavors array length
     $cost = sizeof($flavors)*3.50;
     //formatting number
     $cost = number_format("$cost", 2);
     echo" Order Total: $".$cost;
}

