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
                <h2 class="display-6 fw-bold">CROP PROTECTION</h2>
                <p class="text-muted">Discover advanced, eco-friendly solutions to protect your crops from pests,
                    diseases, and other threats.</p>
            </div>
        </section>

        <!-- Cards Section -->
        <section class="blog-preview py-5">
            <div class="container">
                <div class="row g-4">

                    <!-- BioPesticides - Botanical -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/crop1.jpg" class="card-img-top"
                                alt="BioPesticides Botanical">
                            <div class="card-body">
                                <h6 class="text-muted">Blog Preview</h6>
                                <h5 class="card-title fw-bold">BioPesticides - Botanical</h5>
                                <p class="card-text">Our Botanical BioPesticide collection is based on seed kernel
                                    extracts of Azadirachta indica (Neem), Pongamia pinnata (Karanj), and Annona
                                    squamosa (Custard apple).</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- BioPesticides - Microbial -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/crop2.jpg" class="card-img-top"
                                alt="BioPesticides Microbial">
                            <div class="card-body">
                                <h6 class="text-muted">Blog Preview</h6>
                                <h5 class="card-title fw-bold">BioPesticides - Microbial</h5>
                                <p class="card-text">Our Microbial BioPesticide collection includes BioInsecticides,
                                    BioFungicides, BioBactericides, BioViricides, BioAcaricides, BioNematicides,
                                    BioTermiticides, and Bio Seed Care products.</p>
                                <a href="#" class="btn btn-sm btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <!-- NanoTech - Protection -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <img src="../assets/img/products/crop3.jpg" class="card-img-top" alt="NanoTech Protection">
                            <div class="card-body">
                                <h6 class="text-muted">Blog Preview</h6>
                                <h5 class="card-title fw-bold">NanoTech - Protection</h5>
                                <p class="card-text">Our Nanotech protection products are safe disinfectants made using
                                    nano technology, embedded on a protein and micro-encapsulated with biopolymer for
                                    effective delivery.</p>
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