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
    <title>Sekoenol <?= $title ?></title>
    <!-- CSS files -->
    <link href="<?= base_url() ?>/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url() ?>/dist/css/tabler-vendors.min.css" rel="stylesheet" />

    <link href="<?= base_url() ?>/dist/img/logo.png" rel="icon">
    <link href="<?= base_url() ?>/dist/img/logo.png" rel="apple-touch-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?= base_url() ?>/sweetalert2/sweetalert2.min.css">
    <script src="<?= base_url() ?>/sweetalert2/sweetalert2.all.min.js"></script>


</head>

<body>
    <div class="page">
        <div class="sticky-top">
            <header class="navbar navbar-expand-md navbar-light sticky-top d-print-none">
                <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3"><img src="<?= base_url() ?>/dist/img/logo.png" width="110" height="50" alt="Tabler" class="navbar-brand-image"> <i>SEKOENOL</i></h1>
                    <div class="navbar-nav nav-item flex-row order-md-last">
                        <?php
                        if (session()->levelnama) {
                        ?>
                            <div class="col-12 col-sm-4 col-md-2 col-xl mt-1">
                                <a href="<?= site_url('login/keluar') ?>" class="btn btn-outline-danger active w-100"> Logout &nbsp;</a>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="col-6 col-sm-4 col-md-2 col-xl mt-1">
                                <a href="<?= base_url() ?>/login/index" class="btn btn-outline-info active w-100">
                                    Login
                                </a>
                            </div>
                            &nbsp;
                            <div class="col-6 col-sm-4 col-md-2 col-xl mt-1">
                                <a href="<?= base_url() ?>/login/daftar" class="btn btn-outline-success active w-100">
                                    Daftar
                                </a>
                            </div>
                        <?php
                        }
                        ?>
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
                                            <i class='fas fa-home' style='font-size:14px;color:#33adff'></i>
                                        </span>
                                        <span class="nav-link-title">
                                            Home
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                                            <i class='fas fa-cogs' style='font-size:14px;color:#33adff'></i>
                                            </svg>
                                        </span>
                                        <span class="nav-link-title">
                                            Interface
                                        </span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="dropdown-menu-columns">
                                            <div class="dropdown-menu-column">
                                                <div class="dropdown-menu-column">
                                                    <a class="dropdown-item" href="<?= base_url() ?>/bukutamu/index">
                                                        <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                            <i class='fas fa-book' style='font-size:14px;color:#33adff'></i>
                                                        </span>
                                                        <span class="nav-link-title">
                                                            Buku Tamu

                                                        </span>
                                                    </a>
                                                    <div class="dropend">
                                                        <a class="dropdown-item dropdown-toggle" href="#sidebar-authentication" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false">
                                                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                                <i class='fas fa-glass-cheers' style='font-size:14px;color:#33adff'></i>
                                                            </span>
                                                            <span class="nav-link-title">
                                                                Mempelai
                                                            </span>
                                                        </a>
                                                        <div class="dropdown-menu">
                                                            <a href="<?= base_url() ?>/mempelai/satu" class="dropdown-item">
                                                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                                    <i class='fas fa-gem' style='font-size:14px;color:#33adff'></i>
                                                                </span>
                                                                <span class="nav-link-title">
                                                                    Satu
                                                                </span>
                                                            </a>
                                                            <a href="<?= base_url() ?>/mempelai/dua" class="dropdown-item">
                                                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                                                    <i class='fas fa-gem' style='font-size:14px;color:#33adff'></i>
                                                                </span>
                                                                <span class="nav-link-title">
                                                                    Dua
                                                                </span>
                                                            </a>
                                                        </div>
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
                    if ($title == "") {
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
                                                        <img src="<?= base_url() ?>/upload/<?= $row['brggambar'] ?>" alt="Los Angeles" width="400" height="200">
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


    <script src="<?= base_url() ?>/dist/libs/nouislider/dist/nouislider.min.js" defer></script>
    <script src="<?= base_url() ?>/dist/libs/litepicker/dist/litepicker.js" defer></script>
    <script src="<?= base_url() ?>/dist/libs/tom-select/dist/js/tom-select.base.min.js" defer></script>


    <!-- Tabler Core -->
    <script src="<?= base_url() ?>/dist/js/tabler.min.js" defer></script>



    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function() {
            var el;
            window.TomSelect && (new TomSelect(el = document.getElementById('select-tags-advanced'), {
                copyClassesToDropdown: false,
                dropdownClass: 'dropdown-menu',
                optionClass: 'dropdown-item',
                controlInput: '<input>',
                render: {
                    item: function(data, escape) {
                        if (data.customProperties) {
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                    option: function(data, escape) {
                        if (data.customProperties) {
                            return '<div><span class="dropdown-item-indicator">' + data.customProperties + '</span>' + escape(data.text) + '</div>';
                        }
                        return '<div>' + escape(data.text) + '</div>';
                    },
                },
            }));
        });
        // @formatter:on
    </script>






</body>

</html>