<?php

$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' => [
            'b' => 3
        ]
    ]
];

// Lấy giá trị = 3 mà có key là 'b'
$valueB = $a['b']['o']['b'];

// Lấy giá trị = 1 mà có key là 'c'
$valueC = $a['a']['c'];

// Lấy thông tin của phần tử có key là 'a'
$infoA = $a['a'];


echo "Giá trị = $valueB mà có key là 'b'\n";
echo "Giá trị = $valueC mà có key là 'c'\n";
echo "Thông tin của phần tử có key là 'a':\n";
print_r($infoA);
