<?= $this->extend('main/layout') ?>

<?= $this->section('isi') ?>

<?php
if (session()->getFlashdata('berhasil')) {
?>
    <script>
        Swal.fire({
            title: 'Berhasil',
            text: "Anda telah terdaftar!!! Silahkan Login",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya, Login!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/login/index";
            } else {
                window.location = "/main/index";
            }
        })
    </script>
<?php
}
?>

<div class="page page-center">
    <div class="container-tight">
        <div class="text-center mb-2">
            <img src="<?= base_url() ?>/dist/img/logo.png" width="110" height="50" alt="Tabler"> <i>SEKOENOL</i>
        </div>
        <form class="card card-md" action="<?= base_url() ?>/login/daftarsimpan" method="post">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Buat Akun</h2>
                <div class="mb-3">
                    <label class="form-label">ID User</label>
                    <input type="text" name="userid" id="userid" class="form-control <?= (session()->getFlashdata('errUserId')) ? 'is-invalid' : '' ?>" value="<?= old('userid') ?>" placeholder="Masukan ID User" autofocus>
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session()->getFlashdata('errUserId') ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="usernama" id="usernama" class="form-control <?= (session()->getFlashdata('errUserNama')) ? 'is-invalid' : '' ?>" value="<?= old('usernama') ?>" placeholder="Masukan Nama Lengkap">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session()->getFlashdata('errUserNama') ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" name="useremail" id="useremail" class="form-control <?= (session()->getFlashdata('errUserEmail')) ? 'is-invalid' : '' ?>" value="<?= old('useremail') ?>" placeholder="Masukan email">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session()->getFlashdata('errUserEmail') ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="userpassword" id="userpassword" class="form-control <?= (session()->getFlashdata('errUserPassword')) ? 'is-invalid' : '' ?>" value="<?= old('userpassword') ?>" placeholder="Masukan Password" autocomplete="off">
                    <div id="validationServer03Feedback" class="invalid-feedback">
                        <?= session()->getFlashdata('errUserPassword') ?>
                    </div>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Buat Akun</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            Sudah punya akun ? <a href="<?= base_url() ?>/login/index" tabindex="-1">Login</a>
        </div>
    </div>
</div>




<?= $this->endsection('isi') ?>