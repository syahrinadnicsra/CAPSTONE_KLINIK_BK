<!--tidak dipakai
yang dipakai page.php yang ada di folder app-->
<?php
?>

<?php
error_reporting(0);
switch ($_GET['page']) {
    default:
        include 'app/index.php'; //ditampilkan ke index
        break;
        //include 'obat/data_obat'; //yang mau ditampilkan
        //break;
    case 'tambah_obat':
        include 'obat/tambah_obat.php';
        break;
    case 'ubah_obat':
        include 'obat/ubah_obat.php';
        break;
}
