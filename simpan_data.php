<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim = $_POST['nim'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $program_studi = $_POST['program_studi'];

    $data = "$nim;$nama_lengkap;$tempat_lahir;$tanggal_lahir;$program_studi\n";

    file_put_contents("mhs.txt", $data, FILE_APPEND);

    header("Location: tampil_data.php");
    exit();
}
?>