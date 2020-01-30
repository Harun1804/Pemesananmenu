<h3><i class="fa fa-angle-right"></i>Daftar Menu Yang Tersedia</h3>
<div class="row mb">

    <div class="content-panel">
        <div class="adv-table">
            <a class="btn btn-primary" href="<?= site_url('admin/admin_menu/ht_menu'); ?>">Tambah Menu</a>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Kategori</th>
                        <th>Gambar</th>
                        <th>Nama Menu</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($menu as $m) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <?php echo '<a href="' . site_url('admin/admin_menu/hu_menu/' . $m['idmenu']) . '"><button class="btn btn-primary btn-md">Update</button></a>'; ?>                            </td>
                            <td>
                                <?php if ($m['idkategori'] == 1) {
                                    echo "Makanan";
                                } elseif ($m['idkategori'] == 2) {
                                    echo "Minuman";
                                } else {
                                    echo "Snack";
                                }
                                ?>
                            </td>
                            <td><img src="<?= base_url('assets/img/'.$m['gambar']);?>" width="75px" height="75px"></td>
                            <td><?= $m['nm_menu']; ?></td>
                            <td><?php echo "Rp. ".number_format($m['harga'],2,',','.')?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>