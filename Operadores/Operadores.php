<?php

# Operadores aritmeticos

$x = 4 + 2;   #Adi��o
$x = 4 - 2;   #Subtra��o
$x = 4 * 2;   #Multiplica��o
$x = 4 / 2;   #Divis�o
$x = 4 % 2;   #Resto da Divis�o
$x = 4 ** 2;  #Potencia��o

#Operadores de atribuicao

$x = 0; #x recebe 0
$x = $y = $z = 10; #xyz recebem 10

#Simplifica��es de atribui��o recursivas
#Imagine que o valor de x � igual a 10 para todas as atribui��es

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
