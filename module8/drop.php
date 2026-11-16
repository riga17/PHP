<?php
//KEYWORDI QE LEJON ME NDRYSHU TABELEN KE ALTER

try{
$conn=new PDO("mysql:host=localhost;dbname=digital2","root","");
$sql="ALTER table users drop email varchar(255)";
$conn->exec($sql);
echo "column dropped";
}catch(Exception $e){
    echo "column not dropped";
}

?>