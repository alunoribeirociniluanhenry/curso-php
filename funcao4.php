<?php

function Somar($num1, $num2, $num3){
    $resultado = $num1 * $num2 * $num3;
    echo "O resultado da soma é: $resultado".PHP_EOL;
}

somar(15,30, 25);


$numero1 = readline('informe um numero: ');
$numero2 = readline('informe outro numero: ');
$numero2 = readline('informe outro numero: ');

somar($numero1,$numero2);
