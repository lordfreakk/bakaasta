<?php

//menyimpan data ke dalam variabel
$nama = 'Nofri Fahsyuliardi';
$nim = '4342301008';
$jurusan = 'Teknik Informatika';
$makanan_favorit = ['Roti Bakar', 'Nasi Goreng'];
$nilai_matkul = ['Basis Data' =>100, 'Pemrograman Web' => 100];

//menampilkan data
echo $nama; echo $nim; echo $jurusan;
echo $makanan_favorit; echo $nilai_matkul;

echo '<br> <br>'; echo 'var_dump()'; echo '<br';

//tipe data
var_dump( $nama); var_dump( $nim); var_dump( $jurusan);
var_dump( $makanan_favorit); var_dump ( $nilai_matkul);

echo '<br> <br>'; echo 'print_r'; echo '<br';
 

//tipe data
print_r( $nama ); print_r ( $nim); print_r ( $jurusan );
print_r ( $makanan_favorit ); print_r ( $nilai_matkul);
