<?php
include './connection/dbconnection.php';
include './header.php';
?>
<style>
    * {
        box-sizing: border-box;
    }

    .div-flex {
        display: flex;
    }

    .carousel-bx3 {
        border-radius: 10px;
        height: 55px;
        width: 235px;
        padding-left: 20px;
        padding-top: 15px;
        font-size: 15px
    }


    .P-txt {
        color: #fff;
        font-family: myFont !important;
        text-transform: uppercase;
    }

    .column {
        /* float: left; */
        width: 25%;
        padding: 10px;
        height: 300px;
    }

    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /*--------------------------------------------------------------
# Counts
--------------------------------------------------------------*/

    .facts-figure {
        background-color: #ee244e;
        background-size: cover;
        padding: 80px 0 60px 0;
        position: relative;
    }

    .facts-figure::before {
        content: "";
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
    }

    .facts-figure .achivement {
        position: relative;
        margin-bottom: 40px;
        color: #fff !important;
    }

    .facts-figure .achivement h3 {
        font-size: 36px;
        font-weight: 700;
        color: #fff;
    }

    .facts-figure .counters span {
        font-size: 48px;
        display: block;
        font-weight: 700;
        color: #fff;
    }

    .facts-figure .counters p {
        padding: 0;
        margin: 0 0 20px 0;
        font-family: "Raleway", sans-serif;
        font-size: 14px;
        color: #fff;
    }

    .achivement {
        color: #fff;
        position: relative;
        text-align: center;
    }

    .achivement {
        position: absolute;
        animation-name: SlideRight;
        animation-duration: 0.7s;
        animation-fill-mode: forwards;
        /*animation-delay: 0.2s; */
    }

    .achivement h3 {
        margin-left: -296px;
    }

.carousel-bx2{
    border-radius: 10px;
    width: 150px;
    background-color: #fff;
    margin-top: 150px;
}

    .op-flex {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>
<section>
    <!-- Carousel Silde -->
    <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide">
        <!-- ======= Hero Section ======= -->
        <section id="hero" class="d-flex flex-column justify-content-center" style="background-image: url('./assets/img/bg.jpg'); background-size: cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="title">
                        <h1 class="title-h1" style="margin: 60px 0 10px 0; font-size: 70px; font-weight: 700;line-height: 86px; color: #fff;">
                            Our industry partners
                        </h1>
                        <h3 class="h1-txt">Get access to circuits and track days</h3>
                    </div>
                    <div class="carousel-bx2">
                        <a href="#" style=" color: #ee244e;">Become A Partner</a>
                    </div>
                </div>
            </div>
        </section><!-- End Hero -->
</section>

<!-- ======= Section ======= -->
<section id="" class="feature-rt" style="height:65vh">
    <div class="container">
        <div class="section-title">
            <h6 class="p-txt" style="font-size:35px;display:flex;justify-content:center;margin-top:75px">Creating win-win situation together with </h6>
            <h6 class="p-txt" style="font-size:35px;display:flex;justify-content:center;"> industry partners</h6>
            <!-- <p class="P-txt">No time consuming research anymore</p> -->
        </div>

        <div class="row" style="margin-top:20px">

            <div class="column">
                <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4 class="h1-txt">Target Audience</h4><br>
                    <p class="p-txt">Promote your services to our track day affine B2C audience.</p>
                    <!-- <a href="assets/img/Cardbox-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> -->
                </div>
            </div>
            <div class="column">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4 class="h1-txt">Up- & cross sale</h4><br>
                    <p class="p-txt">We can sell your services as part of our offerings.</p>
                </div>
            </div>

            <div class="column">
                <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4 class="h1-txt">Industry Access</h4><br>
                    <p class="p-txt">We establish B2B partnerships with circuits & OEMs..</p>
                </div>
            </div>
            <div class="column">
                <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                <div class="portfolio-info">
                    <h4 class="h1-txt">Circuit Network</h4><br>
                    <p class="p-txt">Present your services to racetracks on C-level.</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Section -->
<section>
    <div class="container" style="margin-top: 15px;height:200vh">
        <h3 class="p-txt">Our partners</h3>
        <h6 class="p-txt" style="color:gray">We love working with industry partners in the circuit and track day industry to create mutual benefits for them and our clients.</h6>

        <div class="container-cards">
            <div class="index-sec-title">

                <div class="card-group">
                    <div class="card" style="background-color: transparent; gap:15px;margin-right: 10px;">
                        <img src="./assets/img/Cardbox-3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="p-txt">Enel X Way</h5>
                            <p class="p-txt">Enel X Way offers flexible solutions for electrified box, mobile chargers, energy storage systems and everything you need to welcome the new era of electric motorsport & race competitions.</p>
                            <p class="p-txt"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="card" style="background-color: transparent;">
                        <img src="./assets/img/backiee-278386-landscape.jpg" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="p-txt">P Zero™ Experience</h5>
                            <p class="p-txt">Much more than a driving experience, P ZERO™ Experience is an exclusive track-based event owned by Pirelli where you can discover the Pirelli world through a 360° brand experience. Discover more about P ZERO™ Experience and Pirelli.</p>
                            <p class="p-txt"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <!-- </div> -->

                <div class="container" style="margin-top: 15px;">
                    <div class="card-group">

                        <div class="card" style="background-color: transparent; gap:15px;margin-right: 10px;">
                            <img src="./assets/img/slide8.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="p-txt">Porsche Driver Forum PFF</h5>
                                <p class="p-txt">The PFF is a free Porsche community with almost 80k members and 240k users (members and guests) - this means that approx. 60% of Porsche drivers in Germany are in the PFF.</p>
                                <p class="p-txt"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                        <div class="card" style="background-color: transparent;">
                            <img src="./assets/img/CardBox-6.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="p-txt">Point Racing</h5>
                                <p class="p-txt">Ride in your second skin, with the perfect fit, a well-fitting helmet. Get the decisive hundredths to victory. The right equipment in racing - that's what Point Racing is known for!</p>
                                <p class="p-txt"><small class="text-muted">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section><!-- End filler -->


<?php
include './footer.php';
?>