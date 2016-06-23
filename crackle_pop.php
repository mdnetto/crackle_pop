<?php

$number = 0;

while ($number <= 100) {
    if ($number % 3 == 0 ) {
        $print_out = 'Crackle';
        if ($number % 5 == 0) {
            $print_out = $print_out . 'Pop';
        }
    } elseif ($number % 5 == 0) {
        $print_out = 'Pop';
    } else {
        $print_out = $number;
    }
    $number ++;
    print_r($print_out . PHP_EOL);
}
