<?php
    // Directory path:
    define('SITE_ROOT', __DIR__);

    // Connecting database && error handling:
    try {
        $conn=new PDO('mysql:host=localhost;dbname=base','root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>