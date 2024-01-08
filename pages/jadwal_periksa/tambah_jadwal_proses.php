<?php
include __DIR__ . "/../../conf/conn.php";
if ($_POST) {
    $id = $_POST['id'];
    $id_dokter = $_POST['id_dokter'];
    $hari = $_POST['hari'];
    $mulai = $_POST['mulai'];
    $selesai = $_POST['selesai'];
    $query = ("INSERT INTO jadwal_periksa(id,id_dokter,hari,mulai,selesai) 
           VALUES ('" . $id . "','" . $id_dokter . "','" . $hari . "','" . $mulai . "','" . $selesai . "')");
    if (!mysqli_query($conn, $query)) {
        die(mysql_error);
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!"); window.location.href="../../app/?page=data_jadwal"</script>';
    }
}
