<?php

echo 'Peluncuran Roket';

for ( $i = 3; $i >= 0; $i--) {

    if ( $i == 0 ) {
        echo 'Meluncur !!! <br />';
    } else {
        echo '<br />' .$i. '<br />';
    }
}

echo '<br />';
echo 'Segitiga Siku <br />';
$i = 5;
while ($i > 0) {
    for ($j = 0; $j < $i; $j++) {
        print_r('*');
    }
    echo '<br>';
    $i--;
}