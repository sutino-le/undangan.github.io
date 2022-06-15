<?= $this->extend('main/layout') ?>

<?= $this->section('isi') ?>

<h2>Input Data Mempelai Kedua</h2>

<?= form_open('/mempelai/simpandua'); ?>
<?= csrf_field(); ?>

<fieldset class="form-fieldset">
    <div class="mb-3">
        <label class="form-label required">User</label>
        <input type="hidden" name="nikahduauser" id="nikahduauser" class="form-control" value="<?= $userid ?>" />
        <input type="text" class="form-control" value="<?= $userid ?>" autocomplete="off" readonly />
    </div>
    <div class="mb-3">
        <label class="form-label required">Nama Panggilan</label>
        <input type="text" name="nikahduanamapanggilan" id="nikahduanamapanggilan" class="form-control <?= (session()->getFlashdata('errPanggilan')) ? 'is-invalid' : '' ?>" value="<?= old('nikahduanamapanggilan') ?>" autocomplete="off" />
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
        <input type="text" name="nikahduanamalengkap" id="nikahduanamalengkap" class="form-control <?= (session()->getFlashdata('errNama')) ? 'is-invalid' : '' ?>" value="<?= old('nikahduanamalengkap') ?>" autocomplete="off" />
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
        <select name="nikahduajenis" id="nikahduajenis" class="form-select <?= (session()->getFlashdata('errJenis')) ? 'is-invalid' : '' ?>">
            <?php
            if (session()->getFlashdata('errJenis')) {
            ?>
                <option value="<?= old('nikahduajenis') ?>" selected><?= old('nikahduajenis') ?></option>
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
        <input type="text" name="nikahduakeluarga" id="nikahduakeluarga" class="form-control <?= (session()->getFlashdata('errKeluarga')) ? 'is-invalid' : '' ?>" value="<?= old('nikahduakeluarga') ?>" autocomplete="off" />
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
            <textarea name="nikahduaalamat" id="nikahduaalamat" class="form-control <?= (session()->getFlashdata('errAlamat')) ? 'is-invalid' : '' ?>" data-bs-toggle="autosize"><?= (old('nikahduaalamat')) ? old('nikahduaalamat') : '' ?></textarea>
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

    <div class="mb-3">
        <label class="form-label">Advanced tags input</label>
        <select type="text" class="form-select" placeholder="Select a date" id="select-tags-advanced" value="">
            <option value="HTML">HTML</option>
            <option value="JavaScript">JavaScript</option>
            <option value="CSS">CSS</option>
            <option value="jQuery">jQuery</option>
            <option value="Bootstrap">Bootstrap</option>
            <option value="Ruby">Ruby</option>
            <option value="Python">Python</option>
        </select>
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
        window.location.assign("/mempelai/dua");
    }
</script>

<?= $this->endsection('isi') ?>