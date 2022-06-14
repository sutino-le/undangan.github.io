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

<?php
if (session()->getFlashdata('berhasil')) {
?>
    <script>
        Swal.fire(
            'Berhasil',
            'Data berhasil diproses',
            'success'
        )
    </script>
<?php
}
?>


<h2>Data Mempelai</h2>

<?php
foreach ($tampildata as $row) :
?>
    <div class="col-md-6 col-lg-6 m-auto">
        <div class="card">
            <div class="ribbon bg-primary">
                <button class="btn btn-primary" onclick="tambah()"><i class="fas fa-plus"></i></button>
                <button class="btn btn-primary" onclick="edit('<?= $row['nikahsatuuser'] ?>')">><i class="fas fa-edit"></i></button>
                <button class="btn btn-primary" onclick="hapus('<?= $row['nikahsatuuser'] ?>')">><i class="fas fa-trash"></i></button>
            </div>
            <div class="card-body">
                <div class="card-body p-4 text-center">
                    <span class="avatar avatar-xl mb-3 avatar-rounded" style="background-image: url(./static/avatars/002m.jpg)"></span>
                    <h3 class="m-0 mb-1"><a href="#">Mallory Hulme</a></h3>
                    <div class="text-muted">Geologist IV</div>
                    <div class="mt-3">
                        <span class="badge bg-green-lt">Admin</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>






<script>
    function tambah() {
        window.location.assign("/mempelai/formtambahsatu");
    }

    function hapus(nikahsatuuser) {
        Swal.fire({
            title: 'Hapus Data',
            text: "Apakah Anda yakin ingin hapus ?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Tidak',
            confirmButtonText: 'Ya, Hapus !'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.assign("/mempelai/hapussatu/" + nikahsatuuser);
            }
        })

    }
</script>

<?= $this->endsection('isi') ?>