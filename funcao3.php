<?php

function Somar($num1, $num2){
    $resultado = $num1 + $num2;
    echo "O resultado da soma é: $resultado".PHP_EOL;
}

somar(15,30);


$numero1 = readline('informe um numero: ');
$numero2 = readline('informe outro numero: ');

somar($numero1,$numero2);