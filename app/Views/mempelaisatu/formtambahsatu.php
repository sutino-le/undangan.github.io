<?= $this->extend('main/layout') ?>

<?= $this->section('isi') ?>

<h2>Input Data Mempelai Pertama</h2>

<?= form_open('/mempelai/simpansatu'); ?>
<?= csrf_field(); ?>

<fieldset class="form-fieldset">
    <div class="mb-3">
        <label class="form-label required">User</label>
        <input type="hidden" name="nikahsatuuser" id="nikahsatuuser" class="form-control" value="<?= $userid ?>" />
        <input type="text" class="form-control" value="<?= $userid ?>" autocomplete="off" readonly />
    </div>
    <div class="mb-3">
        <label class="form-label required">Nama Panggilan</label>
        <input type="text" name="nikahsatunamapanggilan" id="nikahsatunamapanggilan" class="form-control <?= (session()->getFlashdata('errPanggilan')) ? 'is-invalid' : '' ?>" value="<?= old('nikahsatunamapanggilan') ?>" autocomplete="off" />
        <?php
        if (session()->getFlashdata('errPanggilan')) {
        ?>
            <div class="invalid-feedback"><?= session()->getFlashdata('errPanggilan') ?></div>
        <?php
        }
        ?>
    </div>
    <div class="mb-3">
        <label class="form-label required">Nama Lengkap</label>
        <input type="text" name="nikahsatunamalengkap" id="nikahsatunamalengkap" class="form-control <?= (session()->getFlashdata('errNama')) ? 'is-invalid' : '' ?>" value="<?= old('nikahsatunamalengkap') ?>" autocomplete="off" />
        <?php
        if (session()->getFlashdata('errNama')) {
        ?>
            <div class="invalid-feedback"><?= session()->getFlashdata('errNama') ?></div>
        <?php
        }
        ?>
    </div>
    <div class="mb-3">
        <label class="form-label required">Jenis</label>
        <select name="nikahsatujenis" id="nikahsatujenis" class="form-select <?= (session()->getFlashdata('errJenis')) ? 'is-invalid' : '' ?>">
            <?php
            if (session()->getFlashdata('errJenis')) {
            ?>
                <option value="<?= old('nikahsatujenis') ?>" selected><?= old('nikahsatujenis') ?></option>
            <?php
            } else {
                echo "";
            }
            ?>
            <option value=""></option>
            <option value="Putri dari">Putri dari</option>
            <option value="Putra dari">Putra dari</option>
        </select>
        <?php
        if (session()->getFlashdata('errJenis')) {
        ?>
            <div class="invalid-feedback"><?= session()->getFlashdata('errJenis') ?></div>
        <?php
        }
        ?>
    </div>
    <div class="mb-3">
        <label class="form-label required">Keluarga dari</label>
        <input type="text" name="nikahsatukeluarga" id="nikahsatukeluarga" class="form-control <?= (session()->getFlashdata('errKeluarga')) ? 'is-invalid' : '' ?>" value="<?= old('nikahsatukeluarga') ?>" autocomplete="off" />
        <?php
        if (session()->getFlashdata('errKeluarga')) {
        ?>
            <div class="invalid-feedback"><?= session()->getFlashdata('errKeluarga') ?></div>
        <?php
        }
        ?>
    </div>
    <div class="mb-3">
        <label class="form-label required">Alamat</label>
        <div class="form-floating mb-3">
            <textarea name="nikahsatualamat" id="nikahsatualamat" class="form-control <?= (session()->getFlashdata('errAlamat')) ? 'is-invalid' : '' ?>" data-bs-toggle="autosize"><?= (old('nikahsatualamat')) ? old('nikahsatualamat') : '' ?></textarea>
            <label for="floating-input">Alamat Lengkap</label>
            <?php
            if (session()->getFlashdata('errAlamat')) {
            ?>
                <div class="invalid-feedback"><?= session()->getFlashdata('errAlamat') ?></div>
            <?php
            }
            ?>
        </div>
    </div>

    <div class="card-footer">
        <div class="row align-items-center">
            <div class="col-auto">
                <button type="button" onclick="batal()" class="btn btn-danger btn-outline-info">Batal</button>
                <button type="submit" class="btn btn-primary btn-outline-info">Simpan</button>
            </div>
        </div>
    </div>
</fieldset>
<?= form_close() ?>


<script>
    function batal() {
        window.location.assign("/mempelai/satu");
    }
</script>

<?= $this->endsection('isi') ?>