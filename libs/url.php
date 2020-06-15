<?php

// \ espape
// ^ inicio
// $ fim
// . qualquer caracter
// * 0 ou mais
// + 1 ou mais
// {n, m} minimo, maximo
// [a-zA-Z] intervalo

$url = filter_input(INPUT_POST, 'url');

if ( preg_match('/w{0,3}\.*[a-z]+\.[a-z]+[a-z\.]*$/',$url, $mathes) )
{
    $url = $mathes[0];
}else
{
    die('URL INVÁLIDA');
}

var_dump($url);