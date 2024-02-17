<html>
    <head>
       <title>Hitung Nilai Mahasiswa</title> 
    </head>
    <body>
        <center><hi>Program Hitung Nilai Dengan PHP</hi></center>
        <form method="POST" action="proses.php">
        <table width="350" border="1" align="center">
            <tr>
                <td><strong>NIM</strong></td>
                <td><input name="nim" type="text" id="nim" /></td>
            </tr>
            <tr>
                <td><strong>Nama Mahasiwa</strong></td>
                <td width="181"><input name="nama" type="text" id="nama" /></td> 
            </tr>
            <tr>
                <td><strong>Jurusan</strong></td>
                <td><input name="jurusan" type="text" id="jurusan" /></td>
            </tr>
            <tr>
                <td><strong>Nilai Absen</strong></td>
                <td><input name="absen" type="text" id="absen" /></td>
            </tr>
            <tr>
                <td><strong>Nilai Tugas</strong></td>
                <td><input name="tugas" type="text" id="tugas" /></td>
            </tr>
            <tr>
                <td><strong>Nilai UTS</strong></td>
                <td><input name="uts" type="text" id="uts" /></td>
            </tr>
            <tr>
                <td><strong>Nilai UAS</strong></td>
                <td><input name="uas" type="text" id="uas" /></td>
            </tr>
        </table>
        <center><input type="submit" name="Submit" value="Hitung" /></center>
</form>
    </body>
</html>