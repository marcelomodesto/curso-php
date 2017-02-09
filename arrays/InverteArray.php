<?php

for ($i = count($argv) -1; $i > 0; $i--) {
  $array_invertido[] = $argv[$i];
}

foreach ($array_invertido as $chave => $valor) {
  echo $valor." ";
}
echo PHP_EOL;
 ?>
