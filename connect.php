<?php
    require_once(__DIR__ . '/vendor/autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    $host=$_ENV['DB_HOST'];
    $username=$_ENV['DB_USERNAME'];
    $password=$_ENV['DB_PASSWORD'];
    $db=$_ENV['DB_DATABASE'];

    $dbconnect=mysqli_connect($host,$username,$password,$db);

   
?>
