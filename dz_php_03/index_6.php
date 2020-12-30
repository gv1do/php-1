<?php
/**
 * Задание 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню
с вложенными подменю? Попробовать его реализовать. Важное, при желании можно сделать на движке 3. ВАЖНОЕ!
 */

$menu = [
    'menu1' => 'Меню1',
    'menu2' => 'Меню2',
    'menu3' => 'Меню3',
    'menu41' => [
        'menu5' => 'Меню5',
        'menu4' => [
            'menu4' => 'Меню422',
            'menu5' => 'Меню5222'
        ],

    ],
    'menu6' => 'Меню6',
];

function getMenu($menu) {
    foreach ($menu as $key => $value) {
        if (is_array($value)) {
            echo "<ul>";
            getMenu($value);
            echo "</ul>";
            continue;
        }
        echo "<li><a href='$key'>$value</a></li>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <ul> <?= getMenu($menu); ?></ul>
</body>
</html>