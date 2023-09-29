<?php
    // Directory path:
    define('SITE_ROOT', __DIR__);

    // Connecting database && error handling:
    try {
        // Adicionei charset=utf-8 para garantir que os dados tão sendo tratados em Unicode:
        $conn = new PDO('mysql:host=localhost;dbname=php_store;charset=utf8', 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>