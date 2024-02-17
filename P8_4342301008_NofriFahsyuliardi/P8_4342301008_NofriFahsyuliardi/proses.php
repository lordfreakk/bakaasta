<?php
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$jurusan=$_POST['jurusan'];
$absen=$_POST['absen'];
$tugas=$_POST['tugas'];
$uts=$_POST['uts'];
$uas=$_POST['uas'];

//menghitung nilai akhir
$akhir=(0.1*$absen)+(0.2*$tugas)+(0.3*$uts)+(0.4*$uas);
//menghitung nilai huruf
if ($akhir>=85)
$huruf=("A") and $ket=("Lulus");
else
if ($akhir>=80)
$huruf=("A-") and $ket=("Lulus");
else
if ($akhir>=75)
$huruf=("B+") and $ket=("Lulus");
else
if ($akhir>=70)
$huruf=("B") and $ket=("Lulus");
else
if ($akhir>=65)
$huruf=("B-") and $ket=("Lulus");
else
if ($akhir>=60)
$huruf=("C") and $ket=("Lulus");
else
if ($akhir>=55)
$huruf=("D") and $ket=("Tidak Lulus");
if ($akhir>100)
$huruf=("") and $ket=("Nilai Salah");
else
$huruf=("E") and $ket=("Tidak Lulus");