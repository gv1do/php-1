<?php
$h1 = "Информация обо мне";
$title = "Главная страница - страница обо мне";
$year = date('Y');

$page = file_get_contents("template/site_3.php");

$page = str_replace("{{ H1 }}", $h1, $page);
$page = str_replace("{{ TITLE }}", $title, $page);
$page = str_replace("{{ YEAR }}", $year, $page);

echo $page;