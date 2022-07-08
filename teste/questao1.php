<?php


//Questão01
$name = readline ("Digite seu nome: "); 
$salarioA = readline (" Digite seu salário: ");

if ($salarioA <=1500) {
  $abono =$salarioA * 0.1;
  $sal= $salarioA + $abono; 
  echo "Nome:" . $name. "\n";
  echo "Salario antigo:" . $salarioA . "\n";
  echo "Abono: 10%". "\n";
  echo "Salario com abono" . $sal;}
  else {
    $abono = $salarioA * 0.05;
    $sal= $salarioA + $abono; 
    echo "Nome:" . $name. "\n";
    echo "Salario antigo:" . $salarioA . "\n";
    echo "Abono 5%". "\n";
    echo "Salario com abono" . $sal. "\n";
  }
  ?>
  