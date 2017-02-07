<?php



$a = 0;
$b = 1;

echo $a .PHP_EOL;
echo $b .PHP_EOL;
for ($i=1; $i <= 12; $i++) {
  $c = $a + $b;
  $a = $b;
  $b = $c;
  echo $c.PHP_EOL;
}
 ?>
