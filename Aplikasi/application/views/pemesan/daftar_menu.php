<div class="row">
    <?php
    foreach ($menu as $m) {
        ?>
        <div class="col-md-2">
            <div class="card mb-3">
                <img src="<?php echo base_url('assets/img/' . $m['gambar']); ?>" class="card-img-thumbnail" alt="<?= $m['gambar'] ?>" width="150px" height="125px">
                <div class="card-body">
                    <h5 class="card-title"><?= $m['nm_menu']; ?></h5>
                    <form action="<?= site_url('pemesan/pemesan/masuk_keranjang/' . $m['idmenu']); ?>" method="post">
                        <input type="text" name="harga" value="<?php echo $m['harga']; ?>" readonly>
                        <input type="number" name="jml" placeholder="Jumlah Barang" value="1">
                        <button class="btn btn-primary">Tambah Ke Keranjang</button>
                    </form>
                </div>

            </div>
        </div>
    <?php } ?>
</div>