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
                <h2 class="display-6 fw-bold">PUBLIC HEALTH</h2>
                <p class="text-muted">The main competences of the section are biology and management of weeds, diseases
                    and pests in arable and horticultural crops, seed production, crop quality, crop nutrition and
                    physiology, biological control of diseases, decision support systems, and the environmental fate of
                    pesticides and effects of natural compounds.</p>
            </div>
        </section>

        <!-- Cards Section -->
        <section class="blog-preview py-5">
            <div class="container">
                <div class="row g-4">

                    <!-- VectoGuard -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/health1.jpg" class="card-img-top" alt="VectoGuard">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">VectoGuard</h5>
                                <p class="card-text">The BioFertilizer product range contains beneficial soil microbes
                                    that assist in Biological Nitrogen Fixation, Phosphorus Solubilization, and
                                    mobilization of essential micronutrients.</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- O Fly -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/health2.jpg" class="card-img-top" alt="O Fly">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">O Fly</h5>
                                <p class="card-text">This product supports microbial activity in soil and helps with
                                    Nitrogen Fixation, Potassium Mobilization, and the solubilization of Zinc, Iron, and
                                    Sulphur for public health purposes.</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Quitto -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/health3.jpg" class="card-img-top" alt="Quitto">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Quitto</h5>
                                <p class="card-text">Quitto aids in improving public health conditions through microbial
                                    soil enrichment that helps manage vector control while enhancing micronutrient
                                    availability.</p>
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