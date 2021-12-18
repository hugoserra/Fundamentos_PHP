<?php

#CONCATENACAO DE STRING

$string = "Eu"." Sou"." Muito"." Lindo!"; #O ponto liga uma string a outra

#"string = Eu Sou Muito Lindo!"

$string = "Ola ";
$string .= "Mundo!"; #Faz a contatencao com o valor jс existente na string

#string = "Ola Mundo!"

$x = "Quero";
$y = "Tomar";
$z = "Cafe";

#Aspas duplas e aspas simples

$string = "$x $y $z"; #Aspas duplas interpretam os valores das variaveis (Parser)

#string = "Quero Tomar Cafe"

$string = '$s $y $z'; #Aspas simples consideram tudo como texto

#string = '$s $y $z'

#Para textos, com parser e sem parser

$texto = <<<LABEL
    Este metodo щ util para armazenar textos muito
    grandes, de varias linhas. Quando LABEL щ escrito
    sem aspas simples, como neste exemplo. ha a interpretcao
    das variaveis (efeito de parser)
    Exemplo: $s, perceba que a cor da variavel mudou no editor
    de texto, pois esta sento interpretada
LABEL;


$texto = <<<'LABEL'
    Este metodo щ util para armazenar textos muito
    grandes, de varias linhas. Quando LABEL щ escrito
    com aspas simples, como neste exemplo.nуo ha a interpretcao
    das variaveis (efeito de parser).
    Exemplo: $s, perceba que a cor da variavel щ a mesma do texto
    no editor de texto, pois nуo esta sendo interpretada
LABEL;


#Caracteres de escape

$string = "Se dentro de um texto
for nescesario a utilizaчуo de aspas, (simples ou duplas)
podemos utilizar \"assim\" com uma contrabarra antes
para que as aspas sejam interpretadas como texto, e nуo
como delimitadores da string"


$Especial_char = "\u{A9}" #\u interpreta o codigo hexadecimal de caracteres nуo presentes no teclado
