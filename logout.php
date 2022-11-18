<?php
require_once "core/boot.php";

if ( !empty( $_SESSION[ 'user' ] ) ){
    $_SESSION['message']['logout'] = "logout successfully";
    logout();
} else {
    $_SESSION['message']['logout'] = "Bạn chưa đăng nhập.";
}


return header("location: index.php");

