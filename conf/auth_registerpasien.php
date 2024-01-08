<?php
include __DIR__ . "/conn.php";
if ($_POST) {
    $query2 = "SELECT max(no_rm) as maxKode FROM pasien";
    $steatment = mysqli_query($conn, $query2);
    $result = mysqli_fetch_assoc($steatment);
    $kodedaftar = $result['maxKode'];
    $nourut = (int) substr($kodedaftar, 7, 9);
    //echo $nourut;
    $nourut++;
    $no_rm = '202312-' . sprintf("%03s", $nourut);
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_ktp = $_POST['no_ktp'];
    $no_hp = $_POST['no_hp'];
    $password_pasien = md5($_POST['password_pasien']);
    $query = "INSERT INTO pasien(nama,alamat,no_ktp,no_hp,password_pasien,no_rm) 
       VALUES('" . $nama . "','" . $alamat . "','" . $no_ktp . "','" . $no_hp . "','" . $password_pasien . "','" . $no_rm . "')";

    //echo $query;
    //echo "tampil";
    if (!mysqli_query($conn, $query)) {
        die(mysql_error);
    } else {
        echo '<script>alert("Data Berhasil Ditambahkan !!!"); window.location.href="../pages/pasien/loginPasien.php"</script>'; //redirect ke halaman selanjutnya
    }
}
