<?php
include __DIR__ . "/../../conf/conn.php";
if ($_POST) {
    $id = $_POST['id'];

    $nama_obat = $_POST['id_dokter'];
    $kemasan = $_POST['hari'];
    $harga = $_POST['mulai'];
    $harga = $_POST['selesai'];
    $query = ("UPDATE obat SET id_dokter='$id_dokter',hari='$hari',mulai='$mulai',selesai='$selesai' WHERE id ='$id'");
    if (!mysqli_query($conn, $query)) {
        die(mysql_error);
    } else {
        echo '<script>alert("Data Berhasil Diubah !!!");window.location.href="../../app/index.php?page=data_obat"</script>';
    }
}
