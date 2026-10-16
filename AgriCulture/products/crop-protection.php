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
            <div class="page-title dark-background" data-aos="fade"
                style="background-image: url(assets/img/page-title-bg.webp);"></div>
            <div class="container text-center">
                <h2 class="display-6 fw-bold">CROP AND CROP HEALTH</h2>
                <p class="text-muted">Explore our innovative products that improve soil and crop performance for
                    sustainable agriculture.</p>
            </div>
        </section>

        <!-- Cards Section -->
        <section class="blog-preview py-5">
            <div class="container">
                <div class="row g-4">

                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/product1.jpg" class="card-img-top" alt="BioFertilizers">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">BioFertilizers</h5>
                                <p class="card-text">Our BioFertilizer collection comprises of unique micro organisms
                                    used for seed dressing, soil and foliar application. They aid in Nitrogen fixation,
                                    Phosphorus solubilization, and more.</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- BioStimulants -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/product2.jpg" class="card-img-top" alt="BioStimulants">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">BioStimulants</h5>
                                <p class="card-text">Our Biostimulants are naturally derived formulations combining
                                    microbes and nutrients to reduce stress, improve nutrient assimilation, and optimize
                                    yields.</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Composting -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/product3.jpg" class="card-img-top" alt="Composting">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Composting</h5>
                                <p class="card-text">Our composting cultures help decompose cellulose, lignin, and
                                    proteins to convert biomass into organic fertilizer, reducing waste and replenishing
                                    soil.</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Soil Health -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/product4.jpg" class="card-img-top" alt="Soil Health">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Soil Health</h5>
                                <p class="card-text">Our products improve soil texture, structure, and porosity —
                                    creating a living ecosystem to support crops and wildlife, and sustain farming
                                    activity.</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- Stress Management -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/product5.jpg" class="card-img-top" alt="Stress Management">
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Stress Management</h5>
                                <p class="card-text">This collection includes products that reduce biotic and abiotic
                                    stress, helping plants resist diseases, pests, and harsh climate conditions.</p>
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