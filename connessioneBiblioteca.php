<?php

     $link = mysqli_connect("127.0.0.1", "alfonso", "password", "Biblioteca");
    // $link = mysqli_connect("127.0.0.1", "francescopenna", "berrofronzo", "Biblioteca");

    if (!$link) {

        echo "Errore di connesione" . PHP_EOL;
        echo "codice errore: " . mysqli_connect_errno() . PHP_EOL;
        echo "messaggio errore: " . mysqli_connect_error() . PHP_EOL;
        exit(-1);

    }

?>
