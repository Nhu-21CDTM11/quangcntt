<?php
$pdo = get_pdo();

if ( !file_exists( "get_categories" ) ) {
    function get_categories() {
        global $pdo;

        $sql = "SELECT * FROM CATEGORIES";
        $stmt = $pdo->prepare( $sql );
        $stmt->execute();
        $categories = $stmt->fetchAll();
        return $categories ?? false;
    }
    
}

if ( !file_exists( "find_category" ) ) {
    function find_category( $id ) {
        global $pdo;

        $sql = "SELECT * FROM CATEGORIES INNER JOIN PRODUCTS ON PRODUCTS.category_id = CATEGORIES.id WHERE CATEGORIES.id=:id";
        $stmt = $pdo->prepare( $sql );
        $stmt->bindParam( ":id", $id );
        $stmt->execute();

        $category = $stmt->fetchAll();
        return $category ?? false;
    }
    
}