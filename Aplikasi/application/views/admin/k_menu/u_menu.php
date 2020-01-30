<?php foreach ($menu as $m) { ?>
    <div class="row mt">
        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Halaman Perbaharui Menu</h4>
            <div class="form-panel">
                <div class=" form">
                    <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="<?= site_url('admin/admin_menu/pu_menu/' . $m['idmenu']); ?>" enctype="multipart/form-data">
                        <div>
                            <label for="ktgr">Kategori Menu</label>
                            <select class="form-control" name="ktgr" id="ktgr">
                                <option value="1" <?php if ($m['idkategori'] == 1) {
                                                        echo "selected";
                                                    } ?>>Makanan</option>
                                <option value="2" <?php if ($m['idkategori'] == 2) {
                                                        echo "selected";
                                                    } ?>>Minuman</option>
                                <option value="3" <?php if ($m['idkategori'] == 3) {
                                                        echo "selected";
                                                    } ?>>Snack</option>
                            </select>
                        </div>
                        <div class="form-group ">
                            <label for="gambar" class="control-label col-lg-2">Gambar</label>
                            <div class="col-lg-10">
                                <input class="form-control-file" id="gambar" name="gambar" minlength="2" type="file" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="nmenu" class="control-label col-lg-2">Nama Menu</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="nmenu" type="text" name="nmenu" value="<?= $m['nm_menu']; ?>" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="harga" class="control-label col-lg-2">Harga</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="harga" type="number" name="harga" value="<?= $m['harga']; ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-theme" type="submit" name="submit">Save</button>
                                <button class="btn btn-theme04" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>