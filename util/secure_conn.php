<?php
    // make sure the page uses a secure connection
//    $https = filter_input(INPUT_SERVER, 'HTTPS');
//    echo 'Connection String: ' . $https ; 
//
//    if (!$https) {
//        $host = filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING);
//        $uri = filter_input(INPUT_SERVER, 'REQUEST_URI', FILTER_SANITIZE_STRING);
//        $url = 'https://' . $host . $uri;
//        echo 'Connection String2: ' . $url ; 
//        header("Location: " . $url);
//        exit();
//    }

    if(!isset($_SERVER['HTTPS'])){
        $url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        header("Location: " . $url);
        exit();
}
?>