<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lela & Tino</title>
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
    <style type='text/css'>
        button {
            border: none;
            padding: 13px 17px;
            border-radius: 10px;
            color: white;
            display: inline-block;
            cursor: pointer;
            text-decoration: none;
        }


        button:hover {
            background-color: rgb(248, 77, 171);
        }

        h1 {
            color: aqua;
        }
    </style>

</head>

<body bgcolor="black">

    <nav class="navbar fixed-bottom navbar-expand-lg navbar-light">

        <button class="btn m-auto" title="Buka Undangan"><i class='fas fa-envelope-open-text' style='font-size:48px; color:white; text-shadow: 2px 2px 10px rgb(8, 8, 8);'></i></button>

    </nav>

    <div class="container">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url() ?>/upload/DSC08243.jpg" alt="Los Angeles" style="width:100%; opacity: 0.8;">
                    <div class="carousel-caption">
                        <h3 class="Handycheera_Regular" style="font-size:48px; margin-top:-600px;">The Wedding </h3>
                        <h3 class="Brotherhood_Script" style="font-size:72px; margin-top:0px;"> Lela &nbsp; <img src="<?= base_url() ?>/upload/engagement-ring.png" width="50px"> &nbsp; Tino </h3>
                        <p class="Handycheera_Regular" style="font-size:24px; text-shadow: 2px 2px 10px rgb(248, 77, 171)">24 Juni 2022</p>

                        <p class="card-text" style="font-size: 14px; text-shadow: 2px 2px 10px rgb(248, 77, 171);">
                            <br>
                            <br><br><br><br><br><br><br>
                        </p>


                        <div class="card bg-secondary m-auto" style="max-width: 24rem; box-shadow: 2px 2px 20px rgb(248, 100, 200);">
                            <div class="card-header" style="font-size: 14px; color:white; ">Kepada <br> Yth. Bapak/Ibu/Saudara/i</div>
                            <div class="card-body">
                                <h5 class="card-title" style="font-size: 16px; color:white; ">Septian</h5>
                                <p class="card-text" style="font-size: 12px; color:white; ">di <br> Tempat</p>
                            </div>
                        </div>
                        <br>
                        <p>Mohon maaf apabila ada kesalahan dalam penulisan nama atau gelar</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>