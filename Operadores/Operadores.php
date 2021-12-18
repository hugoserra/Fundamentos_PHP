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


#Operadores de compara��o
#retornam sempre true ou false

2 == 3                 #false
2 == 2                 #true
2 == "2"               #true  (comverte os tipos)
2 === "2"              #false (compara os tipos)

2 != 3                 #true
2 != 2                 #false
2 != "2"               #false  (comverte os tipos)
2 !== "2"              #true (compara os tipos: os tipos s�o diferentes)

#os operadores com 3 simbolos "===" e "!==" comparam
#os valores e os tipos

>           #maior
<           #menor
>=          #maior ou igual
<=          #menor ou igual


#Operador spaceship

1 <=> 1                 # (1 == 1) -> 0
2 <=> 1                 # (3 > 2 ) -> 1
1 <=> 2                 # (1 < 2 ) -> -1

#spaceship compara se um valor � maior, menor ou igual ao outro


#Operadores Logicos

&&      #Operador "And"
||      #Operador "Or"
 !      #Operador "Not"
xor     #Operador "Exclusive Or"
