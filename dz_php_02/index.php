<?php
/**
 * Задание 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения.
    Затем написать скрипт, который работает по следующему принципу:
    если $a и $b положительные, вывести что они положительные;
    если $а и $b отрицательные, вывести что они отрицательные оба;
    если $а и $b разных знаков, вывести что они разных знаков;
    Ноль можно считать положительным числом.
 */

echo "Задание 1.<br>";
$a = rand(-10, 10);
$b = rand(-10, 10);

if ($a >= 0 && $b >= 0){
    echo "Переменные {$a} и {$b} - положительные";
} elseif ($a < 0 && $b < 0){
    echo "Переменные {$a} и {$b} - обе отрицательные";
} else {
    echo "Переменные {$a} и {$b} - разных знаков";
}

echo "<br><br>";

/**
 * Задание 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел
    от $a до 15. При желании сделайте это задание через рекурсию вторым вариантом.
 */
$x = rand(0, 15);
echo "Задание 2.<br>";

switch ($x){
    case 1: echo $x++ . " ";
    case 2: echo $x++ . PHP_EOL;
    case 3: echo $x++ . PHP_EOL;
    case 4: echo $x++ . PHP_EOL;
    case 5: echo $x++ . PHP_EOL;
    case 6: echo $x++ . PHP_EOL;
    case 7: echo $x++ . PHP_EOL;
    case 8: echo $x++ . PHP_EOL;
    case 9: echo $x++ . PHP_EOL;
    case 10: echo $x++ . PHP_EOL;
    case 11: echo $x++ . PHP_EOL;
    case 12: echo $x++ . PHP_EOL;
    case 13: echo $x++ . PHP_EOL;
    case 14: echo $x++ . PHP_EOL;
    case 15: echo $x++ . PHP_EOL;
}
echo "<br><br>";

/**
 * Задание 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать
    оператор return. В делении проверьте деление на 0 и верните текст ошибки.
 */
echo "Задание 3.<br>";
echo add($a, $b);
echo "<br>";

echo minus($a, $b);
echo "<br>";

echo multiply($a, $b);
echo "<br>";

echo share($a, $b);
echo "<br>";

function add($a, $b){
    return $a + $b;
}
function minus($a, $b){
    return $a - $b;
}
function multiply($a, $b){
    return $a * $b;
}
function share($a, $b){
    return $b === 0 ?  "Ошибка, на ноль делить нельзся": $a / $b;
}