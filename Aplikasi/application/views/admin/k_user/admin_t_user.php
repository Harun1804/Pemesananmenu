<div class="row mt">
    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i>Halaman Tambah User</h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="<?= site_url('admin/admin_user/pt_user'); ?>">
                    <div class="form-group ">
                        <label for="cname" class="control-label col-lg-2">Nama*</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="cname" name="name" minlength="2" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="cemail" class="control-label col-lg-2">E-Mail*</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="cemail" type="email" name="email" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="alamat" class="control-label col-lg-2">Alamat</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="alamat" type="text" name="alamat" />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="uname" class="control-label col-lg-2">Username*</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="uname" type="text" name="uname" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="pwd" class="control-label col-lg-2">Password*</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="pwd" type="password" name="pwd" required />
                        </div>
                    </div>
                    
                        <select class="form-control" name="lvl">
                            <option disabled="" selected="">Pilih Level</option>
                            <option value="0">Admin</option>
                            <option value="1">Pemilik</option>
                            <option value="2">Kasir</option>
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