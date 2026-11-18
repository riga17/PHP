<?php
include_once ('connection.php');
//kejt qka kena mrena connection fute ne kete file njehere

if(isset($_POST['username'],$_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    echo "Username :".$username ."<br>";
    echo "Password:".$password;


}
//isset kontrollon a eshte e plotesume kolona e usernamit dhe passwordit

?>