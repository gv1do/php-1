<h2>Каталог</h2>
<?php

function getCatalog($catalog) {
    foreach ($catalog as $key => $value){
        $name = $catalog['name'];
        $price = $catalog['price'];
        if (is_array($value)) {


            echo "<div>";
            getCatalog($value);
            echo "</div>";
            continue;
        }


    }
    echo "<h3>$name</h3><img src=\"http://placehold.it/100x100\" /><p>Цена: $price</p>";
}

getCatalog($catalog);