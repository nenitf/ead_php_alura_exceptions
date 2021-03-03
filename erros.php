<?php

// https://www.php.net/manual/en/errorfunc.constants.php


// ideal estar no php.ini
error_reporting(E_ALL);
// ini_set('display_errors', 0); // env prod
// ini_set('error_log', 'var/log/minha-aplicacao'); // env prod
ini_set('display_errors', 1); // env dev

/* conversão de errors em exceptions, ideal para tratar na aplicação */
set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: Isso é perigoso";
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso";
            break;
    }
});

/* E_ERROR */
echo $variavel;
echo $array[12];

/* E_WARNING */
echo CONSTANTE;
