<?= $this->extend('main/layout') ?>

<?= $this->section('isi') ?>



<!-- Detail Produk -->

<div class="col">
    <div class="card">
        <div class="card-body">
            <div class="row">

                <div class="col-12 col-sm-6">
                    <div id="carousel-indicators-thumb" class="carousel " data-bs-ride="carousel">
                        <div class="carousel-indicators carousel-indicators-thumb">
                            <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="0" class="ratio ratio-16x9 active" style="background-image: url(<?= base_url() ?>/upload/<?= $brggambar ?>)"></button>
                            <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="1" class="ratio ratio-16x9" style="background-image: url(<?= base_url() ?>/static/photos/d366fc3df37fe65b.jpg)"></button>
                            <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="2" class="ratio ratio-16x9" style="background-image: url(<?= base_url() ?>/static/photos/da6119936bd7f566.jpg)"></button>
                            <button type="button" data-bs-target="#carousel-indicators-thumb" data-bs-slide-to="3" class="ratio ratio-16x9" style="background-image: url(<?= base_url() ?>/static/photos/e8f47263360d96af.jpg)"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" alt="" src="<?= base_url() ?>/upload/<?= $brggambar ?>">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" alt="" src="<?= base_url() ?>/static/photos/d366fc3df37fe65b.jpg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" alt="" src="<?= base_url() ?>/static/photos/da6119936bd7f566.jpg">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" alt="" src="<?= base_url() ?>/static/photos/e8f47263360d96af.jpg">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3"><?= $brgsubkat . ' - ' . $brgnama ?></h3>
                    <p><?= $brgdeskripsi ?></p>

                    <hr>

                    <div class="card bg-secondary py-2 px-3 mt-4">
                        <h2 class="mb-0">
                            Rp. <?= number_format($brgharga, 0, ",", ".") ?>
                        </h2>
                    </div>

                    <div class="mt-4">
                        <div class="btn btn-primary btn-lg btn-flat">
                            <i class="fas fa-cart-plus fa-lg mr-2"></i>
                            Add to Cart
                        </div>

                        <div class="btn btn-default btn-lg btn-flat">
                            <i class="fas fa-heart fa-lg mr-2"></i>
                            Add to Wishlist
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>



<?= $this->endsection('isi') ?>