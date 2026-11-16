<?php
//connection mes browserit dhe serverit 
//primary key veq 1 per tabel
//foreign key bejke lidhje mes dy tabelave

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