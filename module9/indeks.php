<?php
include_once ('connection.php');
//kejt qka kena mrena connection fute ne kete file njehere

if(isset($_POST['username'],$_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

}
//issetkontrollon a eshte e plotesume kolona e usernamit dhe passwordit

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="get">

    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <label for="password">Password:</label>
    <input type="Password" id="Password" name="Password">
    <input type="sumbit" value="sumbit"> 
</form>

</body>
</html>
<!--get i merr te dhenat dhe i shfaq ne url-->
<!--post i merr te dhenat po nuk i shfaq ne url, kjo me shume perdoret 
per tema me sensitive si password-->