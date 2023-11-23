<?php 
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root'); 
    define('DB_PASSWORD', 'root'); 
    define('DB_NAME', 'shop');
    try {
        $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    }
    catch (Exception $e) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>
