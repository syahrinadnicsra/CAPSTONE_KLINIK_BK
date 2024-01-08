<?php
include __DIR__ . "/conn.php";
if ($_POST) {
    $nama_pasien = $_POST['nama_pasien'];
    $tgl_periksa = $_POST['tgl_periksa'];
    $obat = $_POST['obat'];
    $total_harga = $_POST['total_harga'];
    $query = ("INSERT INTO periksapasien(nama_pasien,tgl_periksa,obat,total_harga) 
           VALUES ('" . $nama_pasien . "','" . $tgl_periksa . "','" . $obat . "','" . $total_harga . "')");
    //echo $no_rm;
    if (!mysqli_query($conn, $query)) {
        die(mysql_error);
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!"); window.location.href="../riwayat_daftar_poli.php"</script>'; //redirect ke halaman selanjutnya setelah data tersimpan pada database daftar_poli
    }
}
