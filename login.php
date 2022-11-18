<?php

require_once "core/boot.php";

if ($_SERVER[ 'REQUEST_METHOD' ] === "POST") {

    $email = $_POST[ 'email' ];
    $password = $_POST[ 'password' ];
    $remember = $_POST[ 'remember' ];

    if ( !empty( $email ) && !empty( $password ) ) {
        $user = login( $email, $password );
        if ( $user ) {
            $_SESSION[ 'user'] = $user;
            return header( "location: index.php" );
        } 
        $_SESSION[ 'message' ][ 'login' ] = "Login failed";
    }

    if( empty( $email ) ){
        $_SESSION[ 'message' ][ 'email' ] = "Email không được để trống";
    }

    if( empty( $password ) ){
        $_SESSION[ 'message' ][ 'password' ] = "Mật khẩu không được để trống";
    }
    
    return header( "location: login.php" );
    
}

if ( $_SERVER[ 'REQUEST_METHOD' ] === "GET" ) {
    // unset($_SESSION[ 'user' ] );
    if ( !empty ( $_SESSION['user'] ) ){
        return header( "location: index.php" );
    }
    include_once "./view/client/_login.php";
}
