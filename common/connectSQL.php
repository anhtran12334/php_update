<?php
    define('HOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '12345678');
    define('DATABASE', 'smartphone2');

    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    if (mysqli_connect_error()) {
        die('Error connecting to db: '. mysqli_connect_error());
    }
?>