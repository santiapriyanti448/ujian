<?php
if (isset($_POST['simpan'])) {
    include_once('setting.php');
    $supplier_id = $_POST['supplier_id'];
    $total = $_POST['total'];

    $sql = "INSERT INTO penjualan SET supplier_id='$supplier_id', total='$total'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header('location: index.php?m=penjualan');
    } else {
        include "index.php?m=penjualan&s=add";
        echo '<script language="JavaScript">';
        echo  'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}