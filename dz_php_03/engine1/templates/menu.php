<?php
$menu = [
    '/' => 'Главная',
    '?page=catalog' => 'Каталог', [
        'woman' => 'Женцины', 'man' => 'Мужчины', 'kids' => 'Дети'
    ],
    '?page=about' => 'О нас',
    '?page=contact' => 'Контакты',
];


function getMenu($menu) {
    foreach ($menu as $key => $value) {
        if (is_array($value)) {

            echo "<ul class='submenu'>"; // выводится при наведении на любой пункт меню
            getMenu($value);
            echo "</ul>";
            continue;
        }
        echo "<li><a href='$key'>$value</a></li>";
    }
}

getMenu($menu);