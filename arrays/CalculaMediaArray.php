<?php

$acumulador = 0;
for ($i = 1; $i  < count($argv); $i++) {
  $acumulador += $argv[$i];
}

$media = $acumulador / (count($argv) -1);
echo "A media dos números digitados é: $media".PHP_EOL;

 ?>
