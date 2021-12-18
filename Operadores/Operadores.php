<?php

# Operadores aritmeticos

$x = 4 + 2;   #Adição
$x = 4 - 2;   #Subtração
$x = 4 * 2;   #Multiplicação
$x = 4 / 2;   #Divisão
$x = 4 % 2;   #Resto da Divisão
$x = 4 ** 2;  #Potenciação

#Operadores de atribuicao

$x = 0; #x recebe 0
$x = $y = $z = 10; #xyz recebem 10

#Simplificações de atribuição recursivas
#Imagine que o valor de x é igual a 10 para todas as atribuiçães

$x += 10;      #20
$x -= 10;      #0
$x *= 10;      #100
$x /= 10;      #1

#Operadores de incremento e decremento

$x++ = x+=1
$x-- = x-=1

#Nos casos acima, a ordem dos operadores: "X++ e ++X" importa.
#++X = pre incremento
#X++ = pos incremento
