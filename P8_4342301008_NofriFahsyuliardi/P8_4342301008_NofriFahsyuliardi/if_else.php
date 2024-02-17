<?php

$nama = 'Nofri Fahsyuliardi';
$nim = '4342301008';

echo "Nilai Pemrograman Web $nim - $nama <br>";

$nilai = 83;

if ($nilai > 90 ) {
    echo 'Nilainya A, Pertahankan !';
} else if ( $nilai <= 90 && $nilai >=85 ) {
    echo 'Nilainya B, Pertahankan !';
} else if ( $nilai <= 85 && $nilai >=50 ) {
    echo 'Nilainya C, Tingkatkan lagi!';
} else if ( $nilai <= 50 && $nilai >0 ) {
    echo 'Nilai nya D, Tingkatkan lagi!';
} else {
    echo 'Nilai nya E, Tingkatkan lagi!';
}
