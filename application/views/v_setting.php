<?= $this->session->flashdata('msg'); ?>
<div class="content">
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Setting</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="<?= base_url('panel'); ?>">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Data Setting</a>
                </li>
            </ul>
        </div>

        <form method="POST" action="<?= base_url('setting/update_setting'); ?>">
            <div class="row">
                <?php 
                foreach($data_setting_by_id as $s){ 
                $ed = base64_encode($s['id_user']);
            ?>

                <div class="col-md-6">
                    <input type="hidden" name="id_user" value="<?= $ed ?>">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" value="<?= $s['username'] ?>" required>
                </div>
                <div class="col-md-6">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" value="***********" required>
                </div>
                <?php } ?>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary btn-sm float-right">Update Profil</button>
                </div>
        </form>
    </div>
</div>
</div>