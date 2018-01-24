<?php
class Conta
{
  public $numero;
  public $saldo = 0;
  public $limite = 100;

  function deposita(float $valor)
  {
    $this->saldo += $valor;
  }
  function sacar(float $valor)
  {
    $this->saldo -= $valor;
  }
  function imprimiExtrato()
  {
    echo $this->saldo; //depois vai entrar a array
  }
  function consultaSaldoDisponivel()
  {
    echo "Saldo Atual:".$this->saldo;
  }
}
