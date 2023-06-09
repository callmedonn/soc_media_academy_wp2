<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Media Academy</title>
    <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo/logo-pb.png'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/user/css/bootstrap.css'); ?>">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/datatable/datatables.css'); ?>" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/css/global.css'); ?>" rel="stylesheet" type="text/css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        :root {
            --primary: #01999A;
            --secondary: #B8E439;
            --fontColor: #3d3d3d;
            --grey: #EDEDED;
            --greyDark: #9b9b9b;
            --shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
        }

        /* Footer Start */
        footer {
            background-color: var(--grey);
            height: 300px;
        }

        footer .container.container.footer {
            padding: 20px;
            box-sizing: border-box;
        }

        footer .container.container.footer .cr {
            text-align: center;
            margin-top: 80px;
        }

        footer .container.container.footer .cr p {
            color: var(--fontColor);
        }

        footer .container.footer ul li {
            list-style: none;
        }

        footer .container.footer ul li a {
            text-decoration: none;
            color: var(--fontColor);
            transition: .2s;
        }

        footer .container.footer ul li a:hover {
            color: var(--secondary)
        }

        /* Footer End */
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand" href="<?= base_url(); ?>">
                <img src="<?= base_url('assets/img/logo-head.png') ?>" alt="logo" width="35">
            </a>
            <div class="link d-flex">
                <a class="nav-item nav-link link-head" href="<?= base_url(); ?>">Beranda</a>
                <a class="nav-item nav-link link-head" href="<?= base_url(); ?>">Program</span></a>
                <a class="nav-item nav-link link-head" href="<?= base_url(); ?>">Events</span></a>
                <a class="nav-item nav-link link-head" href="<?= base_url(); ?>">Tentang Kami</span></a>
            </div>
            <div class="navbar-nav">
                <?php
                if (!empty($this->session->userdata('email'))) { ?>
                    <a class="nav-item nav-link" href="<?= base_url('booking') ?>">Booking <b><?= $this->ModelBooking->getDataWhere('temp', ['email_user' => $this->session->userdata('email')])->num_rows(); ?></b> Buku</a>
                    <a class="nav-item nav-link" href="<?= base_url('member/myprofil'); ?>">Profil Saya</a>
                    <a class="nav-item nav-link" href="<?= base_url('member/logout'); ?>"><i class="fas fw fa-login"></i> Log out</a>
                <?php } else { ?>
                    <button type="button" class="btn-head-login mr-3" style="height:50px">
                        <a data-toggle="modal" data-target="#loginModal" href="#">Masuk</a>
                    </button>
                    <button type="button" class="btn-head-regist" style="height:50px">
                        <a data-toggle="modal" data-target="#daftarModal" href="#">Daftar</a>
                    </button>
                <?php } ?>
            </div>
        </div>
    </nav>
    <div class="container mt-5">