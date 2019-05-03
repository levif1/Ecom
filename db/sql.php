<?php
require_once 'db/config.php';


 try {
    $pdo = new PDO(MYSQL_CONNECTION_STRING1,
                DB_USER,
                DB_PWD);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Successful<br>";

    $sql = "CREATE DATABASE IF NOT EXISTS " . DB_NAME;

    $pdo->exec($sql);
    echo "Database created successfully<br>";

    $pdo = new PDO(MYSQL_CONNECTION_STRING,
                DB_USER,
                DB_PWD);
    

    $sql = "CREATE TABLE IF NOT EXISTS cities (
    id INT UNSIGNED NOT NULL, 
    city VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
    )";

    // use exec() because no results are returned
    $pdo->exec($sql);
 
    
	$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT UNSIGNED AUTO_INCREMENT NOT NULL, 
    username VARCHAR(20) NOT NULL,
    password VARCHAR(30) NOT NULL,
    PRIMARY KEY (id)
     )";

    // // use exec() because no results are returned
    $pdo->exec($sql);

    $pdo = null;
   

 }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
       // header('Location: ../php/login.php');

        

 
?>