<?php

/*
 * Usado mesmo após o try ou catch retornarem algo da função
 */
function a(): int
{
    try {
        echo "Código";
        //throw new Exception('Exceção aqui');
        return 0;
    } catch (Throwable $e) {
        echo "Problema";
        return 1;
    } finally {
        echo "Final da função";
    }
}

a();
