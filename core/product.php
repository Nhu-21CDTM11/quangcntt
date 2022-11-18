<?php
$pdo = get_pdo();

if ( !file_exists( "get_product" ) ) {
    function get_product() {
        global $pdo;

        $sql = "SELECT * FROM PRODUCTS";
        $stmt = $pdo->prepare( $sql );
        $stmt->execute();
        $products = $stmt->fetchAll();
        return $products ?? false;
    }
    
}