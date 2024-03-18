<?php

// Langkah 1
// function tampilkanHaloDUnia(){
//     echo "Halo dunia! <br>";

//     tampilkanHaloDUnia();
// }

// tampilkanHaloDUnia();

// Langkah 3
// for ($i=1; $i <= 25; $i++){
//     echo "Perulangan ke-{$i} <br>";
// }

// Langkah 4
// function tampilkanAngka (int $jumlah, int $indeks = 1) {
//     echo "Perulangan ke-{$indeks} <br>";

//     if($indeks < $jumlah){
//         tampilkanAngka($jumlah, $indeks + 1);
//     }
// }
// tampilkanAngka(20);

// Menu Bertingkat
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ],
];

function tampilkanMenuBertingkat(array $menu, $level = 0)
{
  echo "<ul>";
  foreach ($menu as $item) {
    echo "<li>";
    for ($i = 0; $i < $level; $i++) {
      echo "&nbsp;&nbsp;";
    }
    echo "{$item['nama']}";
    if (isset($item['subMenu'])) {
      tampilkanMenuBertingkat($item['subMenu'], $level + 1);
    }
    echo "</li>";
  }
  echo "</ul>";
}

tampilkanMenuBertingkat($menu);


?>