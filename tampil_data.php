<?php
$data = file("mhs.txt");

echo "<h1>Data Mahasiswa</h1>";
echo "<table border='1'>";
echo "<tr><th>NIM</th><th>Nama Lengkap</th><th>Tempat Lahir</th><th>Tanggal Lahir</th><th>Program Studi</th></tr>";

foreach ($data as $line) {
    list($nim, $nama_lengkap, $tempat_lahir, $tanggal_lahir, $program_studi) = explode(";", $line);
    echo "<tr><td>$nim</td><td>$nama_lengkap</td><td>$tempat_lahir</td><td>$tanggal_lahir</td><td>$program_studi</td></tr>";
}

echo "</table>";
?>