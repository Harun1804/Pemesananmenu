<div class="row">
    <?php
    foreach ($menu as $m) {
        ?>
        <div class="col-md-2">
            <div class="card mb-3">
                <img src="<?php echo base_url('assets/img/' . $m['gambar']); ?>" class="card-img-thumbnail" alt="<?= $m['gambar'] ?>" width="150px" height="190px">
                <div class="card-body">
                    <h5 class="card-title"><?= $m['nm_menu']; ?></h5>
                    <strong class="card-text">Rp. <?php echo number_format($m['harga'], 2, ",", "."); ?></strong>
                </div>
            </div>
        </div>
    <?php } ?>
</div>