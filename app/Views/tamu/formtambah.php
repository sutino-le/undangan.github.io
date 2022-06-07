<?= $this->extend('main/layout') ?>

<?= $this->section('isi') ?>

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Buku Tamu</h3>
        </div>
        <div class="card-body">
            <form action="/bukutamu/simpan" method="POST">
                <div class="form-group mb-3 ">
                    <label class="form-label">Nomor WhatsApp</label>
                    <div>
                        <div class="input-group mb-2">
                            <span class="input-group-text">
                                +62
                            </span>
                            <input type="text" name="tamuhp" class="form-control <?= (session()->getFlashdata('errTamuHp')) ? 'is-invalid' : '' ?>" value="<?= old('tamuhp') ?>" placeholder="Nomor WhatsApp" autocomplete="off">
                            <?php
                            if (session()->getFlashdata('errTamuHp')) {
                            ?>
                                <div class="invalid-feedback"><?= session()->getFlashdata('errTamuHp') ?></div>
                            <?php
                            }
                            ?>

                            <input type="hidden" name="tamuuser" class="form-control" value="<?= session()->userid ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3 ">
                    <label class="form-label">Nama Lengkap</label>
                    <div>
                        <input type="text" name="tamunama" class="form-control  <?= (session()->getFlashdata('errTamuNama')) ? 'is-invalid' : '' ?>" value="<?= old('tamunama') ?>" placeholder="Masukan Nama">
                        <?php
                        if (session()->getFlashdata('errTamuNama')) {
                        ?>
                            <div class="invalid-feedback"><?= session()->getFlashdata('errTamuNama') ?></div>
                        <?php
                        }
                        ?>
                    </div>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-danger" onclick="batal()">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function batal() {
        window.location.assign('/bukutamu/index');
    }
</script>

<?= $this->endsection('isi') ?>