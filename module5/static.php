<?php

function counter(){
    static $x=0;
    $x++;
    echo "mnumri eshte: $x .<br>";
    
}

counter();
counter();
counter();
?>