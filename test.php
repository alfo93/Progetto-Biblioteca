<?php

$link = mysqli_connect("127.0.0.1", "alfonso","password","Biblioteca");

if(!$link){
    echo "Si è verificato un errore, non riesco a collegarmi al Database", PHP_EOL;
    echo "Codice errore..", mysqli_connect_errno(), PHP_EOL;
    echo "Messaggio di errore..", mysqli_connect_error(), PHP_EOL;
    exit(-1);
}

echo "Ok!",PHP_EOL;

mysqli_close($link);

?>