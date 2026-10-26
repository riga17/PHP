<?php
//local,global,static variables
//local-
//global-e krijon variablenm dhe munet me perdor ne gjithe boten
//static-ruhet vlera meniher pasi ekzikutohet programi

$x=3;
function sum(){
    global $x, $y;
    $y=5;
    echo "$y";
    echo $x + $y. "<br>";
}
sum();
echo "$y"."<br>";
?>