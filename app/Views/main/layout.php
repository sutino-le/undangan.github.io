<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta10
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sekoenol</title>
    <!-- CSS files -->
    <link href="<?= base_url() ?>/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/dist/css/demo.min.css" rel="stylesheet" />

    <link href="<?= base_url() ?>/dist/img/logo.png" rel="icon">
    <link href="<?= base_url() ?>/dist/img/logo.png" rel="apple-touch-icon">

</head>

<body>
    <div class="page">
        <div class="sticky-top">
            <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
                <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                        <img src="<?= base_url() ?>/dist/img/logo.png" width="110" height="50" alt="Tabler" class="navbar-brand-image"> <i>SEKOENOL</i>
                    </h1>
                    <div class="navbar-nav nav-item flex-row order-md-last">
                        <div class="col-6 col-sm-4 col-md-2 col-xl mt-1">
                            <a href="#" class="btn btn-outline-info active w-100">
                                Login
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <div class="navbar-expand-md">
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <div class="navbar navbar-light">
                        <div class="container-xl">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url() ?>">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="5 12 3 12 12 3 21 12 19 12" />
                                                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                                                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                                            </svg>
                                        </span>
                                        <span class="nav-link-title">
                                            Home
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/package -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3" />
                                                <line x1="12" y1="12" x2="20" y2="7.5" />
                                                <line x1="12" y1="12" x2="12" y2="21" />
                                                <line x1="12" y1="12" x2="4" y2="7.5" />
                                                <line x1="16" y1="5.25" x2="8" y2="9.75" />
                                            </svg>
                                        </span>
                                        <span class="nav-link-title">
                                            Interface
                                        </span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <div class="dropend">
                                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-cards" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                        Cards
                                                        <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="./cards.html" class="dropdown-item">
                                                            Sample cards
                                                        </a>
                                                        <a href="./card-actions.html" class="dropdown-item">
                                                            Card actions
                                                            <span class="badge badge-sm bg-green text-uppercase ms-2">New</span>
                                                        </a>
                                                        <a href="./cards-masonry.html" class="dropdown-item">
                                                            Cards Masonry
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="dropdown-menu-column">
                                                <a class="dropdown-item" href="./charts.html">
                                                    Charts
                                                </a>

                                                <div class="dropend">
                                                    <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                        Authentication
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <a href="./sign-in.html" class="dropdown-item">
                                                            Sign in
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                                <form action="." method="get">
                                    <div class="input-icon">
                                        <span class="input-icon-addon">
                                            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                <circle cx="10" cy="10" r="7" />
                                                <line x1="21" y1="21" x2="15" y2="15" />
                                            </svg>
                                        </span>
                                        <input type="text" value="" class="form-control" placeholder="Search…" aria-label="Search in website">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="page-body">
                <div class="container-xl">

                    <?php
                    if ($title == "Halaman pertama") {
                    ?>



                        <div class="row row-deck row-cards">

                            <div class="card">

                                <div class="col-md-12 mb-2 mt-2">
                                    <div class="card">
                                        <div class="card-body">
                                            <div id="carousel-captions" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-inner">
                                                    <div class="carousel-item active">
                                                        <img class="d-block w-100" alt="" src="<?= base_url() ?>/upload/123.jpg" height="400px">
                                                        <div class="carousel-caption-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">

                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt="" src="<?= base_url() ?>/upload/1234.jpg" height="400px">
                                                        <div class="carousel-caption-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3>Slide label</h3>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" alt="" src="<?= base_url() ?>/upload/as.jpg" height="400px">
                                                        <div class="carousel-caption-background d-none d-md-block"></div>
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3>Slide label</h3>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carousel-captions" role="button" data-bs-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carousel-captions" role="button" data-bs-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="visually-hidden">Next</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <?php
                            foreach ($tampildata->getResultArray() as $row) :
                            ?>
                                <div class="col-sm-6 col-lg-3">
                                    <a style="text-decoration: none;" href="<?= base_url() ?>/main/detailbarang/<?= $row['brgid'] ?>">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="card">
                                                    <center>
                                                        <img src="<?= base_url() ?>/upload/<?= $row['brggambar'] ?>" alt="Los Angeles" width="300" height="300">
                                                    </center>
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title"><?= $row['brgnama'] ?></h3>
                                                    <p class="text-muted strong">Rp. <?= number_format($row['brgharga'], 0, ",", ".") ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>

                        </div>


                    <?php
                    } else {
                    ?>
                        <?= $this->renderSection('isi'); ?>
                    <?php
                    }
                    ?>


                </div>
            </div>
        </div>


        <footer class="footer footer-transparent d-print-none">
            <div class="container-xl">
                <div class="row text-center align-items-center flex-row-reverse">
                    <div class="col-12 col-lg mt-3 mt-lg-0">
                        <ul class="list-inline list-inline-dots mb-0">
                            <li class="list-inline-item">
                                Copyright &copy; 2022
                                <a href="." class="link-secondary">Sekoenol</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="./changelog.html" class="link-secondary" rel="noopener">
                                    v1.0
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

    </div>
    </div>
    <!-- Libs JS -->
    <script src="<?= base_url() ?>/dist/libs/apexcharts/dist/apexcharts.min.js" defer></script>
    <script src="<?= base_url() ?>/dist/libs/jsvectormap/dist/js/jsvectormap.min.js" defer></script>
    <script src="<?= base_url() ?>/dist/libs/jsvectormap/dist/maps/world.js" defer></script>
    <script src="<?= base_url() ?>/dist/libs/jsvectormap/dist/maps/world-merc.js" defer></script>
    <!-- Tabler Core -->
    <script src="<?= base_url() ?>/dist/js/tabler.min.js" defer></script>

</body>

</html>