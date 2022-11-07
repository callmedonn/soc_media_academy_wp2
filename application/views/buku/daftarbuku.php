<?= $this->session->flashdata('pesan'); ?>

<head>
    <link href="<?= base_url('assets/css/global.css'); ?>" rel="stylesheet" type="text/css">
</head>

<div>
    <div class="container d-flex" style="margin-top:-50px;width:100%; height:500px; background-image: url(<?= base_url('assets/img/bg-head.png') ?>);background-size:cover">
        <div class="jb-head-1 d-flex align-items-center" style="height: 100% ; width: 100%">
            <div class="text-set">
                <h3>
                    Social Media Academy
                </h3>
                <h5>
                    Berkarir Sebagai Konten Kreator <br>
                    Di Semua Platform.
                </h5>
                <p style="color: rgb(152, 152, 152);">Teknologilah yang bisa memberikan dampak sosial terbesar
                    di negara ini, bukan kebijakan atau policy. - Nadiem Makarim</p>
                <button style="background-color: #E7583C; outline:none; border:none; padding: 6px; border-radius:5px; color:#fff">Daftar Sekarang</button>
                <button style="background-color: #fff; outline:none; border:2px solid #E7583C; padding: 6px; border-radius:5px; color:#E7583C">Selengkapnya</button>
            </div>
        </div>
        <div class="jb-head-2 d-flex justify-content-between align-items-center" style="height: 100% ; width: 100%">
            <div></div>
            <img src="<?= base_url('assets/img/img-jb.png') ?>" alt="img" width="400" height="400">
        </div>
    </div>
    <div class="soc-med d-flex flex-column align-items-center mt-5">
        <h3>Platform Social Media</h3>
        <img src="<?= base_url('assets/img/sm-head.png') ?>" alt="img" width="800">
    </div>
    <div id="carouselExampleIndicators" style="margin-top: 100px;" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="<?= base_url('assets/img/banner.png') ?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/banner-2.png') ?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="<?= base_url('assets/img/banner.png') ?>" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="soc-med d-flex flex-column align-items-center mt-5">
        <h3>Events</h3>
        <p style="color:#B7B7B7">Ikuti event seru yang akan datang dan hadir dikotamu</p>
        <div class="content-events row" style="width:100%">
            <?php
            $imgData = base_url('assets/img/event_1.png');
            for ($x = 0; $x < 6; $x++) {
                echo "<div class='box-content mt-3 col-md-4'>
                        <div class='content-box' style='background-color: white; border-radius: 10px; box-shadow: 0 0 3px 2px rgba(0, 0, 0, 0.1);'>
                            <img class='d-block w-100' style='border-top-left-radius: 10px;border-top-right-radius: 10px;' src='$imgData' alt='Third slide'>
                            <div class='p-2'>
                                <h5>Memilih jenis konten YouTube 2022</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur,
                                    officiis? Obcaecati necessitatibus, vitae aliquid non culpa inventore ad.</p>
                            </div>
                        </div>
                    </div>";
            }
            ?>
        </div>
    </div>
</div>