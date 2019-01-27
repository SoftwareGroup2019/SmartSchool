<?php
$servername = "localhost";
$username = "root";
$password = "";
$option = array(

    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

);

try {
    $conn = new PDO("mysql:host=$servername;dbname=mydb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>