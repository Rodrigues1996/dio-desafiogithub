<?php

$hora = Readline ("Digite a hora: ");

 if ($hora < 12) {
    echo "manhã";
  
 } elseif ($hora >= 12 && $hora < 18) {
    echo " Tarde";
 } else {
     echo " noite";
 }
?>