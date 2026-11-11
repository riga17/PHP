<?php


$host="localhost";
$user="root";
$pass="";


try{
    $conn = new PDO("mysql:host=$host",$user,$pass);
    $sql="Create database digital2";
    $conn->exec($sql);

    echo "database is createds";
    
}catch(exception $e){
    echo " not connected";
}


?>