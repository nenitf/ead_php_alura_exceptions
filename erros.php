<?php

// https://www.php.net/manual/en/errorfunc.constants.php


// ideal estar no php.ini
error_reporting(E_ALL);
// ini_set('display_errors', 0); // env prod
// ini_set('error_log', 'var/log/minha-aplicacao'); // env prod
ini_set('display_errors', 1); // env dev

/* E_ERROR */
echo $variavel;
echo $array[12];

/* E_WARNING */
echo CONSTANTE;
