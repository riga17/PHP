<?php
//manipulimi i fileve ndryshe komunikimi ose lidhja me databaza shmb kompjutera 3 i ka porosite 
// po nfakt i ka veq 2 kjo ndodh sepse nuk u o komunikimi me file te jashtem

$file=fopen("ds.txt","w");
$text="rigaa elaa tuanaa";
fwrite($file,$text);
?>