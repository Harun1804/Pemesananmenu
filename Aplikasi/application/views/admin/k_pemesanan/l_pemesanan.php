<h3><i class="fa fa-angle-right"></i>Daftar Pemesan</h3>
<div class="row mb">

    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Aksi</th>
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
                            <td><?= $p['due_date']; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['alamat']; ?></td>
                            <td><?= $p['email']; ?></td>
                            <td><?= $p['status']; ?></td>
                            <td><a href="<?= site_url('admin/admin_pemesanan/detail_pemesanan/'.$p['idpembayaran']);?>" class="btn btn-primary">Detail</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>