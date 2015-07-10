<?php
// Set up the database connection
//$dsn = 'mysql:host=localhost;dbname=my_guitar_shop2';
$dsn = 'mysql:host=db573796017.db.1and1.com;dbname=db573796017';
$username = 'dbo573796017';
$password = 'ba75023';
//$username = 'mgs_user';
//$password = 'pa55word';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try {
    $db = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('errors/db_error_connect.php');
    exit();
}
?>