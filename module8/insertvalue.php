<?php
try{
$conn=new PDO("mysql:host=localhost;dbname=digital2","root","");
$username="riga";
$password=password_hash("testtest", PASSWORD_DEFAULT);

$sql="Insert into users (username,password) values ('$username','$password')";
$conn->exec($sql);
echo " inserted successfully";
}catch(Exception $e){
    echo "not inserted succesfully";
}
?>