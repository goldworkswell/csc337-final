
<?php
require_once "adaptor.php";

?>

<html>
<head>
    <link rel = "stylesheet" href = "style.css" type = "text/css">
    <script type = "text/javascript" src = "script.js"></script>
    <script type = "text/javascript" src = "prototype.js"></script>    
    </head>
<body>
    
    
    <div id = "signup">
        <h1>Please select a username and password</h1>
    <form action = "index.php" method = "post">
    <label>Username </label><br><input type = "text" name = "username_reg" id = "name"> <br> <br>
    <label>Password </label> <br><input type = "password" name = "password_reg"> <br> <br>
    <input type = "submit" value = "Register">
    </form>
    </div>
    </body>
</html>