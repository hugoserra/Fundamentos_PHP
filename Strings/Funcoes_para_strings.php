<?php

$string = "esta frase tem 24 letras";

#retorna o numero de caracteres da string
$int = strlen($string);

#retona as letras a partir da posicao 0 e durante 4 caracteres
$palavra = substr($string,0,4);

#Converte toda a string para maiusculo
$string = strtoupper($string);

#Converte toda a string para minuscula
$string = strtolower($string);

#Substitui uma letra por outra
$string = str_replace('a','x',$string); #estx frxse tem 24 letrxs

#Verifica qual e a posicao do caractere dentro da string
$int = strpos(%string,'a'); # = 3

#Verifica se uma sequencia é contida dentro de outra, retorno em booleano
$bool = str_contains($string,'letras'); #  = true


//https://www.php.net/manual/pt_BR/ref.strings.php
