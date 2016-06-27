<?php

$i= 1;

while ($i<= 100) {
    $output = ($i % 3 == 0 ? 'Crackle': '') . ($i % 5 == 0 ? 'Pop' : '');
    $output = !empty($output) ? $output : $output = $i;
    echo "$output\n";
    $i++;
}
