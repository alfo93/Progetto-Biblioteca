<?php

    
    $filename='effettua.txt';
    
    $ft = fopen($filename,'w');
    if(!$ft){
        echo "errore apertura file", PHP_EOL;
        exit(1);
    }

    $prestiti = file('cod_prestiti.txt');
    $utenti = file('matricola.txt');

    $spazio=" - ";
    for ($i = 0; $i < sizeof($prestiti); $i++) {
        $string = $utenti[rand(0, sizeof($utenti) - 1)] . $spazio . $prestiti[$i];
        fwrite($ft,$string,strlen($string));
    }
    
    fclose($ft);
    
?>