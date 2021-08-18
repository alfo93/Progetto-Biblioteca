<?php

$filename = 'codici_libri.csv';

$linee=file($filename);

$contatore = 1;

$fine = sizeof($linee);

for($i=1;$i<$fine;$i=$i+1){
    
    
    if($linee[$i]===$linee[$i-1]){

        $contatore = $contatore + 1;
    }else{
        echo $contatore,PHP_EOL;
        $contatore = 1;
    }  
}

?>