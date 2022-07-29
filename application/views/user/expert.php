<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Title -->
    <title>Selamat datang - <?php
$data['user'] = $this->db->get_where('siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama'];
?> - Courses Student Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/bootstrap.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/linericon/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/animate-css/animate.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>vendors/popup/magnific-popup.css">
    <!-- Main css -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/user_style.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/responsive.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.10.4/dist/sweetalert2.all.min.js"></script>

</head>

<body style="overflow-x:hidden;background-color:#fbf9fa">


    <!-- Start Navigation Bar -->
    <header class="header_area" style="background-color: white !important;">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item "><a class="nav-link" href="javascript:void(0)">Hai, <?php
$data['user'] = $this->db->get_where('siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama'];
?></a>
                            </li>
                            <li class="nav-item active"><a class="nav-link" href="<?=base_url('user')?>">Beranda</a>
                            </li>
                            <li class="nav-item "><a class="nav-link text-danger"
                                    href="<?=base_url('welcome/logout')?>">Log
                                    Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Navigation Bar -->


    <!-- Start Greeting Cards -->
    <div class="container">
        <div class="bg-white mx-auto p-4 buat-text" data-aos="fade-down" data-aos-duration="1400"
            style="width: 100%; border-radius:10px;">
            <div class="row" style="color: black; font-family: 'poppins';">
                <div class="col-md-12 mt-1">
                    <h1 class="display-4" style="color: black; font-family:'poppins';" data-aos="fade-down"
                        data-aos-duration="1400">Silahkan pilih Course !
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                        laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
                        voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
                        non proident, sunt in culpa qui officia deserunt mollit anim id est
                    </p>
                    <hr>

                    <h4 data-aos="fade-down" data-aos-duration="1700"><?php
$data['user'] = $this->db->get_where('siswa', ['email' =>
    $this->session->userdata('email')])->row_array();
echo $data['user']['nama'];
?> - Courses Students</h3>
                        <h5>Silahkan memilih Course</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- End Greeting Cards -->


    <!-- Start Lesson Card -->
    <div class="container">
        <div class="row mt-4 mb-5">
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-right">
                <a href="<?=base_url('materi/pro_exp')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/prog.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-down">
                <a href="<?=base_url('materi/desain_exp')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/desain.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-left">
                <a href="<?=base_url('materi/mach_exp')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/machine.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Lesson Card 2 -->
    <div class="container">
        <div class="row mt-4 mb-5">
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-right">
                <a href="<?=base_url('materi/film_exp')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/film.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-down">
                <a href="<?=base_url('materi/menulis_exp')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/menulis.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
            <div class="col-md-4 mb-2 d-flex justify-content-center" data-aos-duration="1900" data-aos="fade-left">
                <a href="<?=base_url('user')?>">
                    <div class="card-kelas">
                        <img src="<?=base_url('assets/')?>img/Kembali.png" class="card-img-top" alt="...">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- End Lesson Card -->


    <br>


    <!-- Start Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    <!-- End Animate On Scroll -->