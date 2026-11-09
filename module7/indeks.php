<?php
//mysql- ndihmon me menaxhimin e databazes
//rdbms-sistemi i menaxhimit te databazes racionale


$host="localhost";
$user="root";
$pass="";
$dbname="digital";

try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
    echo "connected";
    
}catch(exception $e){
    echo " not connected";
}


?>