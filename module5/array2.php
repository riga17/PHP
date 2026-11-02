<?php
$grade=array(
    "math"=>"3",
    "english"=>"5",
    "art"=>"5"
);

foreach($grade as $subject  => $grade){
    echo "Subject : " . $subject . $grade ."<br>";
}


?>