<?php
session_start();
require_once "adaptor.php";
$data = new DatabaseAdaptor();
$data->up_admin($_SESSION['user']);
$data->clear_cart($_SESSION['user']);




?>
<html>
<head>
    <link rel = "stylesheet" href = "style1.css" type = "text/css">
    <link rel = "stylesheet" href = "style.css" type = "text/css">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    
    </head>
<body>
    <h2>Thank you <?=$_SESSION['user']?></h2>
    <h3>Your online payment has been recieved</h3>
    <h4>Your order will be shipped to <?=$_POST['person']?> as soon as possible</h4>
    <a href = "index.php"><input type = "submit" value = "Home" class = "btn btn-primary"></a>
    
    </body>

</html>
