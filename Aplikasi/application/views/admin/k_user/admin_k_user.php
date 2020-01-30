<h3><i class="fa fa-angle-right"></i>Daftar Pengguna Yang Ada</h3>
<div class="row mb">

    <div class="content-panel">
        <div class="adv-table">
            <a class="btn btn-primary" href="<?= site_url('admin/admin_user/ft_user'); ?>">Tambah User</a>
            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Aksi</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($user as $u) {
                        ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td>
                                <?php echo '<a href="' . site_url('admin/admin_user/uf_user/' . $u['id_user']) . '"><button class="btn btn-primary btn-md">Update</button></a>'; ?> 
                            || 
                                <?php echo '<a href="' . site_url('admin/admin_user/d_user/' . $u['id_user']) . '"><button class="btn btn-secondary btn-md">Hapus</button></a>'; ?>
                            </td>
                            <td><?= $u['username']; ?></td>
                            <td><?= $u['password']; ?></td>
                            <td><?= $u['nama']; ?></td>
                            <td><?= $u['alamat']; ?></td>
                            <td><?= $u['email']; ?></td>
                            <td>
                                <?php if ($u['level'] == 0) {
                                    echo "Admin";
                                } elseif ($u['level'] == 1) {
                                    echo "Pemilik";
                                } elseif ($u['level'] == 2) {
                                    echo "Kasir";
                                } else {
                                    echo "Pemesan";
                                }
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