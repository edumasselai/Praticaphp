<?php

/*pratica 1 */

define("nome", "Eduardo");
define("sobrenome", "Masselai");

$nomecompleto = nome . ' ' . sobrenome;

echo "$nomecompleto <br>";
echo "-------- <br> ";
/*pratica 2 */

$salario1 = 1000;
$salario2 = 2000;

$salario2 = $salario1;

++$salario2;

$salario1 *= 1.1;

echo "valor salario 1: $salario1";
echo "valor salario 2: $salario2 <br>";
echo "-------- <br> ";

/*pratica 3*/

if($salario1 > $salario2){
    echo "o valor do salario 1 é maior que salario 2 <br>";
}else if($salario2 > $salario1) {
    echo "o valor do salario 2 é maior que salario 1 <br>";
}else {
    echo "os valores sao iguais <br>";
}
echo "-------- <br> ";

/*repeticao*/

$x = 1;
while($x < 5 ){
    echo "o numero é: $x <br>";
    $x++;
}
echo "-------- <br> ";
?>