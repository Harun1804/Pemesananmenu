<h3><i class="fa fa-angle-right"></i>Detail Pemesanan</h3>
<div class="row mb">

    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Jumlah Menu</th>
                        <th>Harga</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($list_pesanan as $p) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nm_menu']; ?></td>
                            <td><?= $p['jumlah_menu']; ?></td>
                            <td><?= $p['harga']; ?></td>
                            <td><?= $p['total']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>