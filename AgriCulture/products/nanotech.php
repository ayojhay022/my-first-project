<?php
include '../layout/head.php';
?>

<body class="about-page">

    <header id="header" class="header d-flex align-items-center position-relative">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

            <a href="index-2.html" class="logo d-flex align-items-center">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <img src="../assets/img/logo.png" alt="AgriCulture">
                <!-- <h1 class="sitename">AgriCulture</h1>  -->
            </a>

            <?php include '../layout/nav.php' ?>

        </div>
    </header>

    <main class="main">

        <!-- Page Header -->
        <section class="page-header d-flex align-items-center" style="background: #f7f7f7; padding: 60px 0;">
            <div class="container text-center">
                <h2 class="display-6 fw-bold">NANOTECH AGRI INPUTS</h2>
                <p class="text-muted">Our focus includes crop nutrition, seed production, pest management, biological
                    disease control, environmental safety, and decision-support systems for arable and horticultural
                    crops.</p>
            </div>
        </section>

        <!-- Cards Section -->
        <section class="blog-preview py-5">
            <div class="container">
                <div class="row g-4">

                    <!-- Nano Disinfectants -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/nano1.jpg" class="card-img-top" alt="Nano Disinfectants">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Nano Disinfectants</h5>
                                <p class="card-text">The BioFertilizer product range contains beneficial soil microbes
                                    that assist in nitrogen fixation, phosphorus solubilization, and mobilization of
                                    potassium, zinc, iron, and sulphur.</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Nano Nutrients -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/nano2.jpg" class="card-img-top" alt="Nano Nutrients">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Nano Nutrients</h5>
                                <p class="card-text">Agricultural biostimulants are microbe-based or compound-based
                                    products applied to plants or soil to improve tolerance to abiotic stress and
                                    enhance crop productivity.</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <?php
    include '../layout/footer.php';
    ?>