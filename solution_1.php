<?php

$number = 1;

while ($number <= 100) {
    if ($number % 3 == 0 ) {
        $output = 'Crackle';
        if ($number % 5 == 0) {
            $output .= 'Pop';
        }
    } elseif ($number % 5 == 0) {
        $output = 'Pop';
    } else {
        $output = $number;
    }
    $number ++;
    echo "$output\n";
}
