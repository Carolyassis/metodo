<?php
require 'Conta.php';

//um novo objeto

$conta = new Conta();
$conta->deposita(0);
echo "Saldo inicial:".$conta->saldo .PHP_EOL;

$conta->deposita(1500);
$conta->consultaSaldoDisponivel() .PHP_EOL;
?>
