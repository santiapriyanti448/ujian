<?php
if (isset($_POST['update'])) {
    include_once('setting.php');
    $id = $_POST['id'];
    $supplier_id = $_POST['supplier_id'];
    $total = $_POST['total'];

    $sql = "UPDATE penjualan SET supplier_id='$supplier_id', total='$total' WHERE id='$id'";
    $result = mysqli_query($koneksi, $sql);
    if ($result) {
        header('location: index.php?m=penjualan');
    } else {
        include "index.php?m=penjualan&s=edit&id='$id'";
        echo '<script language="JavaScript">';
        echo  'alert("Data Gagal Ditambahkan.")';
        echo '</script>';
    }
}