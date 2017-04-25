<?php
require_once "adaptor.php";
?>
<html>
<head>
<title>Shop</title>
<link rel = "stylesheet" href = "style.css" type = "text/css">
    <script type = "text/javascript" src = "script.js"></script>
    <script type = "text/javascript" src = "prototype.js"></script> 
</head>
<body>
<div id = "rl">
<form action = "index.php" method = "get">
    <label>Account Options</label> <br> <br>
    <input type = "hidden" value ="register" name = "mode"><input type = "submit" value = "Register">
    </form> <br>
    <form action = "index.php" method = "get">
    <input type = "hidden" value = "login" name = "mode"><input type = "submit" value = "Login">
    </form>
    </div>
     
    <div id = "icontainer">
    <button id = "b1">Add to cart</button><div><img src = "img_1.jpg"></div> 
        <button id = "b2">Add to cart</button><div><img src = "img_2.jpg"></div>
        <button id = "b3">Add to cart</button><div><img src = "img_3.jpeg"></div>
        <button id = "b4">Add to cart</button><div><img src = "img_4.jpg"></div>
        <button id = "b5">Add to cart</button><div><img src = "img_5.jpg"></div> 
        <p id = "output"></p>
    </div>
</body>
  

</html>