<?php
//Questão3
$hora = readline ("Digite o horário: ");
if ($hora<12) {
  echo "manhã"."\n";
}elseif ($hora >= 12 && $hora < 18) {
    echo " Tarde"."\n";
}else {
  echo "Noite"."\n";}
  ?>