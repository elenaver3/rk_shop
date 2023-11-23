<?php 
    define('DB_HOST', 'sql104.byethost17.com');
    define('DB_USER', 'b17_35486626'); 
    define('DB_PASSWORD', '0303F0x!'); 
    define('DB_NAME', 'b17_35486626_shop1');
    try {
        $mysql = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
        $mysql->set_charset('utf8');
    }
    catch (Exception $e) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }
?>
