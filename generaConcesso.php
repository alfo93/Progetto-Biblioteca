<?php

    
    $filename='concesso.txt';
    
    $ft = fopen($filename,'w');
    if(!$ft){
        echo "errore apertura file", PHP_EOL;
        exit(1);
    }

    $prestiti = file('cod_prestiti.txt');
    $libri = file('cod_libro.txt');

    $spazio=" - ";
    for ($i = 0; $i < sizeof($prestiti); $i++) {
        $string = $libri[rand(0, sizeof($libri) - 1)] . $spazio . $prestiti[$i];
        fwrite($ft,$string,strlen($string));
    }
    
    fclose($ft);
    
?>