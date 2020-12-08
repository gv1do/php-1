<?php
$a = 0b00000111;  // 7
$b = 0b00000011;  // 3


$a = $a ^ $b;
$b = $a ^ $b;
$a = $a ^ $b;

echo ($a);
echo ($b);