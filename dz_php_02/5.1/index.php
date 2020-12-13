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
    case 2: echo $x++ . " ";
    case 3: echo $x++ . " ";
    case 4: echo $x++ . " ";
    case 5: echo $x++ . " ";
    case 6: echo $x++ . " ";
    case 7: echo $x++ . " ";
    case 8: echo $x++ . " ";
    case 9: echo $x++ . " ";
    case 10: echo $x++ . " ";
    case 11: echo $x++ . " ";
    case 12: echo $x++ . " ";
    case 13: echo $x++ . " ";
    case 14: echo $x++ . " ";
    case 15: echo $x++ . " ";
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
    return $b === 0 ?  "Ошибка, на ноль делить нельзя": $a / $b;
}
echo "<br><br>";

/**
 * Задание 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
В зависимости от переданного значения операции выполнить одну из арифметических операций
(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
 */
echo "Задание 4.<br>";
function mathOperation($arg1, $arg2, $operation){
    switch ($operation) {
        case "sum":
            return add($arg1, $arg2);
            break;
        case "minus":
            return minus($arg1, $arg2);
            break;
        case "multiply":
            return multiply($arg1, $arg2);
            break;
        case "share":
            $res = share($arg1, $arg2);
            if (is_numeric($res)){
                return round($res, 2);
            }
            break;
        default:
            return "Error. Такой операции не существует";
    }
}


echo mathOperation(5, 3, "sum") . "<br>";
echo mathOperation(5, 3, "minus") . "<br>";
echo mathOperation(5, 3, "multiply") . "<br>";
echo mathOperation(5, 3, "share") . "<br>";
echo mathOperation(5, 3, "error") . "<br>";

echo "<br><br>";

/**
 * Задание 6. *С помощью рекурсии организовать функцию возведения числа в степень.
 * Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
 */
echo "Задание 6.<br>";
function power($val, $pow){
    if ($pow === 0 ) {
        return 1;
    } elseif ($pow < 0) {
        return "Ошибка. Степень должна быть положительной";
    }

    return $val * power($val, --$pow);


}
echo power(2, 3) . "<br>";
echo power(2, -3) . "<br>";
echo power(5, 0) . "<br>";