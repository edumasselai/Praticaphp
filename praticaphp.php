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

/*pratica  4*/

$materias = array(˜banco de dados˜,˜programacao web˜, ˜redes de comunicacao˜);
$professor = array(˜Marco Aurelio˜, ˜Cleber Nardelli˜, ˜Fabiano Gabardo˜);


/* pratica 6*/

$boletim = array(
    array(˜disciplina˜ => ˜matematica˜, ˜faltas˜ => ˜5˜, ˜media => ˜5˜);
    array(˜disciplina˜ => ˜portugues˜, ˜faltas˜ => ˜2˜, ˜media => ˜6˜);
    array(˜disciplina˜ => ˜ed fisica˜, ˜faltas˜ => ˜0˜, ˜media => ˜9˜);
    array(˜disciplina˜ => ˜geografia˜, ˜faltas˜ => ˜1˜, ˜media => ˜8˜);
    array(˜disciplina˜ => ˜historia˜, ˜faltas˜ => ˜1˜, ˜media => ˜7˜);

);

echo ˜<table>
        <tr>
            <td>Diciplina</td>
            <td>Faltas</td>
            <td>Media</td>
        </tr>˜;
    
    foreach ($boletim as $disciplina){
        echo ˜<tr>˜;
        foreach($disciplina as $chave => $valor){
            echo ˜<td>$valor</td>;
        }
        echo ˜</tr>;
    }
    echo ˜</table>;
    
?>