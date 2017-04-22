<?php
require_once "adaptor.php";
?>
<?php

if(isset($_GET['mode'])){
    
    if ($_GET['mode'] === "register"){
     require_once "register.php";
     }
     elseif ($_GET['mode'] === "login"){
     require_once "login.php";
     }
    }
else {
    require_once "shop.php";
}
$db = new DatabaseAdaptor ();
if (isset($_POST['username']) && $_POST['password'] != ""){
$db->add($_POST['username'], $_POST['password']);
}
     ?>