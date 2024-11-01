<?php

$menu = [
    ["nama" => "Beranda"],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    ["nama" => "Pantai"],
                    ["nama" => "Gunung"]
                ]
            ],
            ["nama" => "Kuliner"],
            ["nama" => "Hiburan"]
        ]
    ],
    ["nama" => "Tentang"],
    ["nama" => "Kontak"],
];
function tampilkanMenuBertingkat(array $menu, $level = 0) {
    echo "<ul>";
    
    foreach ($menu as $item) {

        if ($level == 0) {
            echo "<li style='list-style-type: disc;'>{$item['nama']}</li>";
        } elseif ($level == 1) {
            echo "<li style='list-style-type: circle;'>{$item['nama']}</li>";
        } elseif ($level == 2) {
            echo "<li style='list-style-type: square;'>{$item['nama']}</li>";
        }


        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu'], $level + 1);
        }
    }
    
    echo "</ul>";
}

tampilkanMenuBertingkat($menu);

?>
