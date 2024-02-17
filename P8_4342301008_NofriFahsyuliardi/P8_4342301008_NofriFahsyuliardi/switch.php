<?php

$nilai = 87;
switch ($nilai) {
    case ( $nilai > 90):
        echo 'Nilainya A, pertahankan !';
        break;
    case ( $nilai <= 90 && $nilai >=85 ):
        echo 'Nilainya B, pertahankan !';
        break;
    case ( $nilai <= 85 && $nilai >=50 ):
        echo 'Nilainya C, tingkatkan!';
        break;
    case ( $nilai <=50 && $nilai >0 ):
        echo 'Nilainya D, tingkatkan!';
        break;
    case_:
        echo 'Nilainya E, DO';
        break;
}