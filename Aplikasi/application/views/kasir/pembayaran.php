<h3><i class="fa fa-angle-right"></i>Daftar Pembayaran</h3>
<div class="row mb">

    <div class="content-panel">
        <div class="adv-table">
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesanan</th>
                        <th>Tanggal Pemesanan</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pembayaran as $p) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['tanggal']; ?></td>
                            <td><?= $p['due_date']; ?></td>
                            <td><?php if($p['status']== 0){
                                echo "Belum Dibayar";
                                }else{
                                    echo "Selesai";
                                    } ?></td>
                            <td>
                                <?=
                                    '<a href="'.site_url('kasir/kasir_pembayaran/u_pembayaran/'.$p['idpembayaran']). '"><button class="btn btn-error">Selesai</button></a>';
                                ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>