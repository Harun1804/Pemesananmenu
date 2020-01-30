<div class="row mt">
    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i>Halaman Tambah Menu</h4>
        <div class="form-panel">
            <div class="form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="<?= site_url('admin/admin_menu/pt_menu'); ?>" enctype="multipart/form-data">
                    <div>
                        <label for="ktgr">Kategori Menu</label>
                        <select class="form-control" name="ktgr" id="ktgr">
                            <option disabled="" selected="">Pilih Level</option>
                            <?php foreach ($ktgr as $k) { ?>
                                <option value="<?= $k['idkategori']; ?>"><?= $k['nm_kategori']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group ">
                        <label for="gambar" class="control-label col-lg-2">Gambar</label>
                        <div class="col-lg-10">
                            <input class="form-control-file" id="gambar" name="gambar" minlength="2" type="file" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="nmenu" class="control-label col-lg-2">Nama Menu</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="nmenu" type="text" name="nmenu" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="harga" class="control-label col-lg-2">Harga</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="harga" type="number" name="harga" />
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