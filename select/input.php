<?php

include 'koneksi.php';

$absen = $_POST['absen'];
$nama_siswa = $_POST['nama_siswa'];
$tgl = date('d-m-Y');
$jumlah_absn = count($nama_siswa);

for ($i=0; $i < $jumlah_absn; $i++) {
    mysqli_query($koneksi, "INSERT INTO absen values ('','$nama_siswa[$i]','$absen[$i]','$tgl')");
}

header('location:tampil.php');
