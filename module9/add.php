<?php

include_once ('connection.php');

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $password=password_hash("12345678",PASSWORD_DEFAULT);

    $sql="insert into users (username,password)
    values(:username,:password)";

    $sqlQuery=$conn ->prepare($sql);
    $sqlQuery->bindParam(':username',$username);//lidh parametrat
    $sqlQuery->bindParam(':password',$password);
    $sqlQuery->execute();
    echo "data save succesfully";
    //query eshte nje kerkes qe ja bojna databases dmth ku mi rujt te dhenat
    //psh :emri ne kolonen 1 
}



?>