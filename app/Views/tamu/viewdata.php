<?= $this->extend('main/layout') ?>

<?= $this->section('isi') ?>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">


<script>
    $(document).ready(function() {
        $('#bukutamu').DataTable();
    });
</script>

<h2>Data Buku</h2>
<button class="btn btn-primary mb-3 m-auto" onclick="tambah()" id="formtambah"><i class="fas fa-plus-circle"></i>&nbsp; Tambah Data</button>

<table id="bukutamu" class="table table-hover card-table table-vcenter text-nowrap datatable" style="width:100%">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama Lengkap</th>
            <th>No. WhatsApp</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        foreach ($tampildata as $row) :
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['tamunama'] ?></td>
                <td><?= $row['tamuhp'] ?></td>
                <td>
                    <a href="<?= base_url() ?>/bukutamu/formedit/<?= $row['tamuid'] ?>" class="btn btn-sm m-auto btn-success"><i class="fas fa-edit"></i></a>
                    <a href="<?= base_url() ?>/bukutamu/formedit/<?= $row['tamuid'] ?>" class="btn btn-sm m-auto btn-danger"><i class="fas fa-trash"></i></a>
                    <a href="<?= base_url() ?>/bukutamu/formedit/<?= $row['tamuid'] ?>" class="btn btn-sm m-auto btn-primary"><i class="fas fa-paper-plane"></i></a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<script>
    function tambah() {
        window.location.assign("/bukutamu/formtambah");
    }
</script>

<?= $this->endsection('isi') ?>