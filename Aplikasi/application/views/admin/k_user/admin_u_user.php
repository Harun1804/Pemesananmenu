<?php foreach ($user as $u) { ?>
    <div class="row mt">
        <div class="col-lg-12">
            <h4><i class="fa fa-angle-right"></i>Halaman Perbaharui</h4>
            <div class="form-panel">
                <div class=" form">
                    <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="<?= site_url('admin/admin_user/pu_user/' . $u['id_user']); ?>">
                        <div class="form-group ">
                            <label for="cname" class="control-label col-lg-2">Nama</label>
                            <div class="col-lg-10">
                                <input class=" form-control" id="cname" name="name" minlength="2" type="text" value="<?= $u['nama']; ?>" />
                            </div>
                        </div>
                        <div class="form-group ">
                            <label for="cemail" class="control-label col-lg-2">E-Mail</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="cemail" type="email" name="email" value="<?= $u['email']; ?>" />
                            </div>
                        </div>
                        <div class=" form-group ">
                            <label for=" alamat" class="control-label col-lg-2">Alamat</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="alamat" type="text" name="alamat" value="<?= $u['alamat']; ?>" />
                            </div>
                        </div>
                        <div class=" form-group ">
                            <label for=" uname" class="control-label col-lg-2">Username</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="uname" type="text" name="uname" value="<?= $u['username']; ?>" />
                            </div>
                        </div>
                        <div class=" form-group ">
                            <label for=" pwd" class="control-label col-lg-2">Password</label>
                            <div class="col-lg-10">
                                <input class="form-control " id="pwd" type="password" name="pwd" value="<?= $u['password']; ?>" />
                            </div>
                        </div>

                        <select class=" form-control" name="lvl">
                            <option disabled="">Pilih Level</option>
                            <option value="0" <?php if ($u['level'] == 0) {
                                                    echo "selected";
                                                } ?>>Admin</option>
                            <option value="1" <?php if ($u['level'] == 1) {
                                                    echo "selected";
                                                } ?>>Pemilik</option>
                            <option value="2" <?php if ($u['level'] == 2) {
                                                    echo "selected";
                                                } ?>>Kasir</option>
                            <option value="3" <?php if ($u['level'] == 3) {
                                                    echo "selected";
                                                } ?>>Pemesan</option>
                        </select>

                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button class="btn btn-theme" type="submit">Save</button>
                                <button class="btn btn-theme04" type="button">Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php } ?>