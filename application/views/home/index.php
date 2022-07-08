<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UMKM-DEPOK | Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>public/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>public/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <a href="index.html" class="hero-logo" data-aos="zoom-in"><img
                    src="<?= base_url() ?>public/dist/img/logo-STT-NF-1-removebg-preview.png" alt="" width="50%"></a>
            <h1 data-aos="zoom-in">Welcome To UMKM - DEPOK Homepage</h1>
            <h2 data-aos="fade-up">We are team of talented designers making websites with Bootstrap</h2>
            <a data-aos="fade-up" data-aos-delay="200" href="#Produk" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <a href=""><img src="<?= base_url() ?>public/dist/img/logo-STT-NF-1-removebg-preview.png" alt=""
                        class="img-fluid"></a>
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#Produk"><b>Produk</b></a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url() . 'login' ?>"><b>LOGIN</b></a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="Produk" class="services">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Daftar Produk</h2>
                    <div class="col-12 table-responsive">
                        <div class="row">
                            <?php foreach ($masis as $mhs) : ?>
                            <div class="card col-md-4">
                                <img src="<?= base_url('uploads/') . $mhs->foto ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= ucwords($mhs->nama) ?></h5>

                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <table class="table table-hover table-bordered">
                            <thead class="thead-dark align-center">
                                <tr>
                                    <th style="vertical-align: middle;">No</th>
                                    <th style="vertical-align: middle;">Kode</th>
                                    <th style="vertical-align: middle;">Nama</th>
                                    <th style="vertical-align: middle;">Stok</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $nomor = 1; ?>
                                <?php foreach ($masis as $mhs) : ?>
                                <tr>
                                    <td style="vertical-align: middle;"><?= $nomor++ ?></td>
                                    <td style="vertical-align: middle;"><?= $mhs->kode ?></td>
                                    <td style="vertical-align: middle; text-align:left;"><?= ucwords($mhs->nama) ?></td>
                                    <td class="text-center" style="vertical-align: middle;"><?= $mhs->stok ?></td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vendor JS Files -->
        <script src="<?= base_url() ?>public/assets/vendor/aos/aos.js"></script>
        <script src="<?= base_url() ?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url() ?>public/assets/vendor/glightbox/js/glightbox.min.js"></script>
        <script src="<?= base_url() ?>public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="<?= base_url() ?>public/assets/vendor/swiper/swiper-bundle.min.js"></script>
        <script src="<?= base_url() ?>public/assets/vendor/php-email-form/validate.js"></script>

        <!-- Template Main JS File -->
        <script src="<?= base_url() ?>public/assets/js/main.js"></script>

</body>

</html>