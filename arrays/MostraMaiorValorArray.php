<?php

$maior = 0;
for ($i = 1; $i  < count($argv); $i++) {

  if ($maior < $argv[$i]) {
    $maior = $argv[$i];
  }
}

echo "O maior número digitado foi : $maior".PHP_EOL;

 ?>
