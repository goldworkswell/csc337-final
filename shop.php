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
    <input type = "hidden" value ="register" name = "mode"><input type = "submit" value = "Create Account">
    </form>
    <form action = "index.php" method = "get">
    <input type = "hidden" value = "login" name = "mode"><input type = "submit" value = "Login">
    </form>
    </div> <br>
    <h1>Shopping page for whatever we wanna sell</h1>    
</body>
  

</html>