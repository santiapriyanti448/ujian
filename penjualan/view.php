<?php include_once('header.php'); ?>

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Data Penjualan</div>
                    <div class="col-4">
                        <a href="?m=penjualan&s=add" class="btn btn-lg btn-primary float-end">Tambah</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr align="center">
                                <th>No</th>
                                <th>Supplier ID</th>
                                <th>Total</th>
                            </tr>
                        </thea>
                        <tbody>
                            <?php
                            include_once('setting.php');
                            $sql    = "SELECT penjualan.id, supplier_id, total  FROM penjualan JOIN supplier On supplier.id=penjualan.supplier_id";
                            $result = mysqli_query($koneksi, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                $no = 1;
                                while ($r = mysqli_fetch_assoc($result)) {
                            //         if (!isset($r['foto'])) {
                            //             $foto = '0.png';
                            //         } elseif ($r['foto']=='') {
                            //             $foto = '0.png';
                            //         } elseif ($r['foto']==Null) {
                            //             $foto = '0.png';
                            //         } else {
                            //             $foto = $r['foto'];
                            //         }
                            //         $foto = isset($r['foto']) ? $r['foto'] : '0.png';
                                    echo '<tr>
                                            <td>' . $no . '</td>
                                            <td>' . $r['supplier_id'] . '</td>
                                            <td>' . $r['total'] . '</td>
                                            <td>
                                                <a href="?m=penjualan&s=edit&id=' . $r['id'] . '" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="?m=penjualan&s=delete&id=' . $r['id'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin data penjualan akan dihapus?, Hapus 1 data penjualan akan menghapus semua data penjualan yang ada pada data tersebut.\')">Hapus</a>
                                            </td>
                                         </tr>';
                                    $no++;
                                }
                            } else {
                                echo "<tr>
                                        <td colspan=5 align='center'>Data Kosong</td>
                                    </tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>
