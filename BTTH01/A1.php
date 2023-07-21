<?php

function calculate_operations($arrs) {
    $sum = 0;
    $product = 1;
    $diff = $arrs[0];
    $quotient = $arrs[0];

    foreach ($arrs as $value) {
        $sum += $value;
        $product *= $value;
        $diff -= $value;
        $quotient /= $value;
    }

    echo "Tổng các phần tử = " . implode(' + ', $arrs) . " = $sum\n";
    echo "Tích các phần tử = " . implode(' * ', $arrs) . " = $product\n";
    echo "Hiệu các phần tử = " . implode(' - ', $arrs) . " = $diff\n";
    echo "Thương các phần tử = " . implode(' / ', $arrs) . " = $quotient\n";
}

$arrs = array(2, 5, 6, 9, 2, 5, 6, 12, 5);
calculate_operations($arrs);
