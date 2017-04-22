<?php
//require_once "shop.php";

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
     
     ?>