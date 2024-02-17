<?php 

echo 'Variabel didalam PHP <br />';

$makanan_pokok = 'Nasi';

echo 'Deklarasi Awal =' .$makanan_pokok. '<br />';

$makanan_pokok = 'Roti';

echo 'Setelah diganti =' .$makanan_pokok. '<br />';

echo '<br />';

echo 'Konstanta didalam PHP <br  />';

//mendefiniskan Konstanta 
define('makanan_pokok', 'nasi');

//mengakses
print 'Deklarasi Awal =' .$makanan_pokok. '<br />';

define('makanan_pokok', 'roti'); 

print 'Setelah Diganti =' .$makanan_pokok. '<br />';

?>
