<?php
include "koneksi.php";

$nim = $_POST['nim'];
$nama = $_POST['nama_lengkap'];
$nohp = $_POST['no_hp'];
$tgl = $_POST['tanggal_lahir'];

$query = "INSERT INTO mahasiswa (nim, nama_lengkap, no_hp, tanggal_lahir)
          VALUES ('$nim', '$nama', '$nohp', '$tgl')";

$insert = mysqli_query($connect, $query);

if ($insert) {
    echo "Data berhasil disimpan! <a href='script.php'>Cetak PDF</a>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($connect);
}
?>
