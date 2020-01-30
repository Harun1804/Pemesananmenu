<h3><i class="fa fa-angle-right"></i>Laporan Pemesanan</h3>
<div class="row mb">

    <div class="content-panel">
        <button><a href="<?= site_url('pemilik/pemilik/cetak_laporan'); ?>" class="btn btn-succes">Cetak</a></button>
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Jumlah Pemesan</th>
                        <th>Total Pemasukan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pemesanan as $p) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['tanggal']; ?></td>
                            <td><?= $p['Jumlah Pemesan']; ?></td>
                            <td>Rp. <?php echo number_format($p['pendapatan'], 2, ",", "."); ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>