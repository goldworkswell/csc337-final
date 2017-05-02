<?php
session_start();
require_once "adaptor.php";
?>

<html>
<head>
    <link rel = "stylesheet" href = "style.css" type = "text/css">
    <link rel = "stylesheet" href = "style1.css" type = "text/css">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
<body>
   
    <div id = "lpage">
    <h1>Checkout</h1>
    
    <form action = "reciept.php" method = "post">
    <label>Username </label> <br><input type = "text" name = "username" id = "name"> <br> <br>
    <label>Cardholder Name</label> <br> <input type = "text" name = "person"> <br> <br>
    <label>Credit Card</label> <br><input type = "text" pattern = "\d{4}-\d{4}-\d{4}-\d{4}" placeholder="####-####-####-####" required = "required"><br> 
        <input type = "text" pattern = "\d{2}/\d{2}" placeholder="MM/YY" required = "required"> <br>
        <input type = "text" pattern = "\d{3}" placeholder="###" required = required>
    <br> <br>
    <input type = "submit" class = "btn btn-primary">
    </form>
    </div>
    
    </body>
</html>
