<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "posts";

    $conn = new PDO("mysql:host=$host; dbname=$dbname",$user, $password);

?>