<?php
define('TEMPLATES_DIR', './templates/');
define('LAYOUTS_DIR', 'layouts/');

if (isset($_GET['page'])){
    $page = $_GET['page'];
} else $page = 'index';

$catalog =  [
    [
        'name' => 'Пицца',
        'price' => 24
    ],
    [
        'name' => 'Чай',
        'price' => 1
    ],
    [
        'name' => 'Яблоко',
        'price' => 12
    ],
];

$params = [
//    'menu' => getMenu($menu), // НЕ РАБОТАЕТ
];



switch ($page) {
    case 'index':
        $params['name'] = 'Alex';
        break;
    case 'catalog':
        $params['catalog'] = $catalog;
        break;
}

echo render($page, $params);


function render($page, $params = []){
    return renderTemplate(LAYOUTS_DIR . 'main', [
        'menu' => renderTemplate('menu', $params),
        'content' => renderTemplate($page, $params),
    ]);
};

function renderTemplate($page, $params = []) {
    extract($params);

    ob_start();
    $fileName = TEMPLATES_DIR . $page . ".php";
    if (file_exists($fileName)){
        include $fileName;
    }
    return ob_get_clean();
}