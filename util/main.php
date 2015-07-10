<?php
// Get the document root
$doc_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT', FILTER_SANITIZE_STRING);
//$doc_root = $_SERVER['DOCUMENT_ROOT'];

// Get the application path
$uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);
$dirs = explode('/', $uri);
$app_path = '/' . $dirs[1] . '/' . $dirs[2] . '/';

// Set the include path
set_include_path($doc_root . $app_path);

// Get common code
define('__ROOT__', dirname(dirname(__FILE__))); 
require_once(__ROOT__.'/util/tags.php');  
require_once(__ROOT__.'/model/database.php');

// Define some common functions
function display_db_error($error_message) {
    global $app_path;
    include 'errors/db_error.php';
    exit;
}

function display_error($error_message) {
    global $app_path;
    include 'errors/error.php';
    exit;
}

function redirect($url) {
    session_write_close();
    header("Location: " . $url);
    exit;
}

// Start session to store user and cart data
session_start();
?>
