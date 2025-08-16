<?php
function calcularAnoNascimento($idade, $anoAtual) {
    return $anoAtual - $idade;
}

$idade = 30;
$anoAtual = 2025;

$anoNascimento = calcularAnoNascimento($idade, $anoAtual);
echo "Ano de nascimento: " . $anoNascimento;