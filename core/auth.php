<?php

$pdo = get_pdo();

if( !function_exists("login")){
    function login($email, $password){
        global $pdo;
        $sql = "SELECT * FROM USERS WHERE email = :email AND password = :password";

        $stmt = $pdo->prepare( $sql );
        $stmt ->bindParam( ":email", $email );
        $stmt ->bindParam( ":password", $password );
        $stmt->execute();
        $user = $stmt->fetch();
        return $user ?? false;
    }
}

if( !function_exists("logout")){
    function logout( ) {
        unset($_SESSION['user']);
    }
    
}