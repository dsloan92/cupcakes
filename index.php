<?php
/** Name: Dallas Sloan
 *  Date Jan 12, 2019
 *  index.php
 * PHP Review Assigment: Cupcakes
 */
//Turn on error reporting -- this is critical!
ini_set('display_errors', 1);
error_reporting(E_ALL);

include ("function.php");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cupcake</title>
</head>
<body>
<div class="jumbotron text-center">
    <h1 class="display-4">Cupcake Fundraiser</h1>
</div>

<div class="container align-items-center">
    <form action="thankYou.php" method="post" id="orderForm">
        <!--Grabbing name information -->
        <div class = "form-group col-6">
            <label for="name">Your Name:*</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Please input your name.">
        </div><!-- Name information div-->

        <!--Cupcake Flavor CheckBoxes-->
        <div class="form-check col-6">
            <p class = "form-group">Cupcake Flavors:</p>
            <?php
            //looping through cupcakeFlavor array to create checkboxes
            foreach($cupcakeFlavors as $key=>$value) {
                echo"
                <input  type = \"checkbox\" name = \"flavors[]\" id = $key value = $key >
                <label class = \"form-check-label\" for=$key>
                $value 
                </label >
                <br>";
                }
                ?>
        </div><!--Cupcake flavors-->

        <!--Order Button -->
        <div class = "btn mt-3">
            <button id="order" type="submit" class="btn btn-primary">
                Order
            </button>
        </div><!--Order Button Div-->


    </form><!--ending form div-->

</div><!--complete container div-->


<?php

?>

<script src="js/jquery.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</body>
</html>

