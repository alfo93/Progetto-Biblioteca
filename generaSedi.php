<?php

    $filename = 'cod_sedi.txt';

    $ft = fopen($filename,'a');

    $libri = file('codici.txt');

    $sedi = array('Architettura','Economia e management','Fisica e Scienze della Terra','Giurisprudenza','Ingegneria','Matematica e Informatica','Morfologia,chirurgia e medicina sperimentale','Scienze biomediche e chirurgo specialistiche','Scienze mediche','Studi umanistici');
    $spazio=" - ";
    for ($i = 0; $i < sizeof($libri) - 1; $i++) {
        $string = $sedi[rand(0, sizeof($sedi) - 1)] . $spazio . $libri[$i];
        fwrite($ft,$string,strlen($string));
    }
    
    
?>