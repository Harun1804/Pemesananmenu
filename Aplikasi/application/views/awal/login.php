<div class="row mt">
    <div class="col-lg-12">
        <h4><i class="fa fa-angle-right"></i> Halaman Login</h4>
        <div class="form-panel">
            <div class=" form">
                <form class="cmxform form-horizontal style-form" id="commentForm" method="post" action="<?= site_url('welcome/cek_login');?>">
                    <div class="form-group ">
                        <label for="uname" class="control-label col-lg-2">Username</label>
                        <div class="col-lg-10">
                            <input class=" form-control" id="uname" name="uname" type="text" required />
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="password" class="control-label col-lg-2">Password</label>
                        <div class="col-lg-10">
                            <input class="form-control " id="password" type="password" name="pwd" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-theme" type="submit">Login</button>
                            <button class="btn btn-theme04" type="button">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
