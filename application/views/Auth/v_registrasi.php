<style>
    .btn-primary {
        border-radius: 20px;
    }

    .float-label {
        color: royalblue;
    }
</style>

<div class="page-body">

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <h5>Daftar WithUs</h5>
                    <!--<span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>-->
                </div>
                <div class="card-block">
                    <form class="form-material" method="post" action="<?= base_url('auth/registrasi') ?>">
                        <div class="form-group form-default  form-static-label">
                            <input type="text" name="username" class="form-control" value="<?= set_value('username'); ?>">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>') ?>
                            <label class="float-label" style="color: royalblue;">Username</label>
                        </div>
                        <div class="form-group form-default form-static-label">
                            <input type="text" name="email" class="form-control" value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                            <label class="float-label" style="color: royalblue;">Email</label>
                        </div>
                        <div class="form-group form-default form-static-label">
                            <input type="text" name="profesi" class="form-control" value="<?= set_value('profesi'); ?>">
                            <?= form_error('profesi', '<small class="text-danger pl-3">', '</small>') ?>
                            <label class="float-label" style="color: royalblue;">Profesi</label>
                        </div>
                        <div class="form-group form-default form-static-label">
                            <input type="text" name="no_wa" class="form-control" value="<?= set_value('no_wa'); ?>">
                            <span class="form-bar"></span>
                            <label class="float-label" style="color: royalblue;">No Telepon (Optional)</label>
                        </div>
                        <div class="form-group form-default form-static-label">
                            <input type="password" name="password" class="form-control">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            <label class="float-label" style="color: royalblue;">Password</label>
                        </div>
                        <div class="form-group form-default form-static-label">
                            <input type="password" name="re-password" class="form-control">
                            <span class="form-bar"></span>
                            <label class="float-label" style="color: royalblue;">Konfirmasi Password</label>
                        </div>
                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-sm btn-primary waves-effect waves-light">Gabung Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>