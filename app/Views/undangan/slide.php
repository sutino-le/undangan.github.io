<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="<?= base_url() ?>/undangan/css/font.css">

</head>

<body>
    <nav class="navbar fixed-bottom navbar-expand-lg navbar-light bg-light">

        <a href="http://" class="btn btn-primary"><i class="fas fa-home"></i></a>

    </nav>

    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <div class="item active">
                    <img src="<?= base_url() ?>/upload/DSC08243.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3 class="Brotherhood_Script" style="font-size:48px; margin-top:-400px;"> Lela &nbsp; <img src="<?= base_url() ?>/upload/engagement-ring.png" width="50px"> &nbsp; Tino </h3>
                        <p class="elegant-theme-line" style="font-size:24px;">24 Juni 2022</p>
                    </div>
                </div>

                <div class=" item">
                    <img src="<?= base_url() ?>/upload/DSC08243.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3 class="Brotherhood_Script" style="font-size:48px; margin-top:-400px;"> Lela &nbsp; <img src="<?= base_url() ?>/upload/engagement-ring.png" width="50px"> &nbsp; Tino </h3>
                        <p class="elegant-theme-line" style="font-size:24px;">24 Juni 2022</p>
                    </div>
                </div>

                <div class="item">
                    <img src="<?= base_url() ?>/upload/DSC08243.jpg" alt="Los Angeles" style="width:100%;">
                    <div class="carousel-caption">
                        <h3 class="Brotherhood_Script" style="font-size:48px; margin-top:-400px;"> Lela &nbsp; <img src="<?= base_url() ?>/upload/engagement-ring.png" width="50px"> &nbsp; Tino </h3>
                        <p class="elegant-theme-line" style="font-size:24px;">24 Juni 2022</p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</body>

</html>