<?= $this->extend('main/layout') ?>

<?= $this->section('isi') ?>


<div class="page page-center">
    <div class="container-tight">
        <div class="text-center mb-2">
            <img src="<?= base_url() ?>/dist/img/logo.png" width="110" height="50" alt="Tabler"> <i>SEKOENOL</i>
        </div>
        <form class="card card-md" action="<?= base_url() ?>/login/cekUser" method="post" autocomplete="off">
            <div class="card-body">
                <h2 class="card-title text-center mb-2">Silahkan Login</h2>
                <div class="mb-3">
                    <label class="form-label">User ID</label>
                    <input type="text" name="userid" id="userid" class="form-control <?= (session()->getFlashdata('errUserId')) ? 'is-invalid' : '' ?>" placeholder="Masukan User ID" value="<?= old('userid') ?>" autocomplete="off" autofocus>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session()->getFlashdata('errUserId') ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">
                        Password
                        <span class="form-label-description">
                            <a href="./forgot-password.html">Lupa Password</a>
                        </span>
                    </label>
                    <input type="password" name="password" id="password" class="form-control <?= (session()->getFlashdata('errPassword')) ? 'is-invalid' : '' ?>" placeholder="Masukan Password" autocomplete="off">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session()->getFlashdata('errPassword') ?>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3 mb-lg-5">
            Belom punya akun ? <a href="<?= base_url() ?>/login/daftar" tabindex="-1">Daftar</a>
            <br><br><br><br><br><br>
        </div>
    </div>
</div>



<?= $this->endsection('isi') ?>