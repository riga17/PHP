<?php

$host="localhost";
$user="root";
$pass="";
$dbname="digital2";



try{

$conn= new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
echo "connected";
}catch(exception $e){
echo "not connected";



}




?>