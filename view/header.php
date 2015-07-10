<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>My Guitar Shop</title>
    <link rel="stylesheet" type="text/css"
          href="<?php echo $app_path ?>main.css">
</head>

<body>
<header>
    <h1>My Guitar Shop</h1>
    <nav id="hdr_nav_menu">
        <a href="<?php echo $app_path; ?>">Home</a> |
        <a href="<?php echo $app_path . 'cart'; ?>">View Cart</a> |
        <a href="<?php echo $app_path . 'about'; ?>">About Us</a> |
        <a href="<?php echo $app_path . 'contact'; ?>">Contact Us</a> |
        <a href="<?php echo $app_path . 'admin'; ?>">Admin</a>
    </nav>
</header>
