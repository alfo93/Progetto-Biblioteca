<?php

    $startDate = '20180107'; // i prestiti partono in una data tra il 7 gennaio 2020
    $endDate = '20200305'; // e il 5 marzo 2020
    
    $ft = fopen('prestiti.txt', 'w');
    $sedi = array('Architettura','Economia e management','Fisica e Scienze della Terra','Giurisprudenza','Ingegneria','Matematica e Informatica','Morfologia,chirurgia e medicina sperimentale','Scienze biomediche e chirurgo specialistiche','Scienze mediche','Studi umanistici');

    for($i = 1; $i < 151; $i++) {

        $fMin = strtotime($startDate);
        $fMax = strtotime($endDate);

        $fVal = mt_rand($fMin, $fMax);

        $inizioPrestito = date('Y-m-d', $fVal);
        $finePrestito = date('Y-m-d', strtotime('+30 days', strtotime($inizioPrestito)));

        $string = $i . ";" . $inizioPrestito . ";" . $finePrestito . ";" . $sedi[rand(0, sizeof($sedi) - 1)] . PHP_EOL;
        fwrite($ft, $string, strlen($string));

    }

    /*
    $filename = 'cod_sedi.txt';

    $ft = fopen($filename,'a');

    $libri = file('codici.txt');

    $sedi = array('Architettura','Economia e management','Fisica e Scienze della Terra','Giurisprudenza','Ingegneria','Matematica e Informatica','Morfologia,chirurgia e medicina sperimentale','Scienze biomediche e chirurgo specialistiche','Scienze mediche','Studi umanistici');
    $spazio=" - ";
    for ($i = 0; $i < sizeof($libri) - 1; $i++) {
        $string = $sedi[rand(0, sizeof($sedi) - 1)] . $spazio . $libri[$i];
        fwrite($ft,$string,strlen($string));
    }
*/
?>