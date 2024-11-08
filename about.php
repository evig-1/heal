<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- Logo -->
    <?php include 'link.php' ?>
     <style>

.img-fluid {
        display: block;
        width: 100%;
        /* height: 100%; */
        object-fit: cover;
        /* Maintain aspect ratio and cover container */
    }

    .join__card {
        position: relative;
        border: none;
        margin: 0;
        overflow: hidden;
    }

    .join__card-img {
        width: 100%;
        height: auto;
    }

    .join__card-layer {
        background: rgba(0, 0, 0, 0.5);
    }
      

        @media (min-width: 901px) {
            .d-none.d-lg-block {
                display: block !important;
            }
        }
        body {
    overflow-x: hidden;
}




@media only screen and (max-width: 768px) {
    #vision-content {
        order: 2;
    }
    #vision-image {
        order: 1;
    }

    .join__heading {
            font-size: 1.5rem; /* Adjust font size for mobile */
            text-align: center; /* Center text for mobile */
        }


}
    </style>
    
</head>

<body>

    <!-- GoUp START -->
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <!-- GoUp END -->

    <!-- Navbar START -->
     <?php include 'nav.php'?>
   
    <!-- Navbar END -->

    <div class="banner mb-0">
        <div class="banner__overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-start">
                        <h1 class="global__title global__title-dark text-capitalize">about us</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="index.php">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                about us
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="banner__polygon d-none d-lg-block">
                    <img src="assets/img/polygon.svg" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- Banner END -->

    <!-- Support START -->
    <div class="support">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="global__text global__text-w">What we do?</h3>
                    <h2 class="support__heading global__heading global__heading-w">
                        We are committed to assisting the most vulnerable
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-xl-4" data-aos="fade-left" data-aos-duration="1000">
                    <div class="support__card global__white">
                        <div class="global__icon support__card-icon">
                            <img src="assets/img/sports.png" alt="image" class="img-fluid" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <h3 class="support__card-heading global__heading">Served Masses</h3>
                            <p class="support__card-desc global__desc mt-3 mb-0">Devoted to serving the community with essential charitable services for all individuals Committed to providing vital charity services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4" data-aos="fade-left" data-aos-duration="1000">
                    <div class="support__card global__white">
                        <div class="global__icon support__card-icon">
                            <img src="assets/img/medical.png" alt="image" class="img-fluid" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <h3 class="support__card-heading global__heading">Medical Facilities</h3>
                            <p class="support__card-desc global__desc mt-3 mb-0">Our facility offers compassionate medical care regardless of financial circumstances, providing essential healthcare services.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4" data-aos="fade-right" data-aos-duration="1000">
                    <div class="support__card global__white">
                        <div class="global__icon support__card-icon">
                            <img src="assets/img/cap-icon.png" alt="image" class="img-fluid" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <h3 class="support__card-heading global__heading">Free Education</h3>
                            <p class="support__card-desc global__desc mt-3 mb-0">
                                Free education facilitated by charity involves nonprofit organizations or philanthropic efforts that fund educational initiatives without cost.
                            </p>
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-6 col-xl-3" data-aos="fade-right" data-aos-duration="1000">-->
                <!--    <div class="support__card global__white">-->
                <!--        <div class="global__icon support__card-icon">-->
                <!--            <img src="assets/img/food.png" alt="image" class="img-fluid" style="height: 32px; width: 32px;">-->
                <!--        </div>-->
                <!--        <div class="">-->
                <!--            <h3 class="support__card-heading global__heading">Healthy Food</h3>-->
                <!--            <p class="support__card-desc global__desc mt-3 mb-0">Providing healthy food through charity involves nonprofit organizations and charitable efforts that aim to distribute nutritious meals to individuals.</p>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
    </div>
    <!-- Support END -->

    <!-- Our Mission START -->
    <div class="donation global__py">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-md-9 col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <h3 class="global__text">Our Mission</h3>
                    <h2 class="donation__heading global__heading">
                        We Don't Just Care We Act
                    </h2>
                    <p class="donation__desc global__desc mb-3">Our Mission is to empower and uplift the lives of underprivileged children and their families through comprehensive support programs, educational initiatives, and community engagement. </p>
                    <p class="donation__desc global__desc m-0">Our efforts focus on breaking the cycle of poverty and providing vulnerable children with the resources, support, and opportunities they need to build a better future. Through education, healthcare, and community development, we aim to create lasting, positive change in the lives of those we serve.
                    </p>
                </div>
                <div class="col-12 col-lg-6 position-relative" data-aos="fade-left" data-aos-duration="1000">
                    <div class="donation__img d-flex justify-content-center">
                        <img class="img-fluid donation__img-shape" src="assets/img/shape.png" alt="image">
                        <img class="img-fluid" src="assets/img/about1.png" alt="image">
                    </div>
                    <img class="donation__element2" src="assets/img/element.png" alt="image">
                </div>
            </div>
        </div>
    </div>
    <!-- Our Mission END -->

 
 
<div class="donation global__py pt-0">
    <div class="container p-sm-0">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-lg-6 position-relative donation__img" data-aos="fade-left" data-aos-duration="1000" id="vision-content">
                  <img class="donation__element" src="assets/img/element.png" alt="image">
                <div class="donation__img d-flex justify-content-center">
                    <img class="img-fluid" src="assets/img/amit.png" alt="image">
                </div>
            </div>
            <div class="col-12 col-md-9 col-lg-5 donation__content" data-aos="fade-right" data-aos-duration="1000" style="padding-top: 12px;" id="vision-image">
              
                <h3 class="global__text" style="padding-top: 12px;">Our Vision</h3>
                <h2 class="donation__heading global__heading">
                    A Nourished and Thriving Generation
                </h2>
                <p class="donation__desc global__desc mb-3">We envision communities where children can grow and thrive without the burden of hunger or unmet medical needs. By fostering sustainable solutions and partnerships, we aim to build a better tomorrow for generations to come.</p>
                <p class="donation__desc global__desc m-0">Our goal is to create sustainable solutions that empower children to thrive, fostering communities where every child receives the support they need to reach their full potential.</p>
            </div>
        </div>
    </div>
</div>
<!-- Our Vision END -->
<!-- Our Vision END -->

    <!-- Our Vision END -->

    <!-- Our Values START -->
    <div class="donation global__py pt-0">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between">
                
                <div class="col-12 col-md-9 col-lg-5" data-aos="fade-right" data-aos-duration="1000">
                    <h3 class="global__text">Our Values</h3>
                    <h2 class="donation__heading global__heading">
                        Compassion, Integrity, Innovation
                    </h2>
                    <p class="donation__desc global__desc mb-3">Our core values guide our work and shape our approach to service. Compassion drives us to act with empathy and kindness. Integrity ensures we maintain the highest standards of transparency and accountability. Innovation inspires us to seek creative solutions to complex challenges.</p>
                    <p class="donation__desc global__desc m-0">Together, these values fuel our commitment to making a lasting impact in the lives of those we serve.
                    </p>
                </div>
                <div class="col-12 col-lg-6 position-relative" data-aos="fade-left" data-aos-duration="1000">
                    <div class="donation__img d-flex justify-content-center">
                        <img class="img-fluid donation__img-shape" src="assets/img/shape.png" alt="image">
                        <img class="img-fluid" src="assets/img/about3.png" alt="image">
                    </div>
                    <img class="donation__element2" src="assets/img/element.png" alt="image">
                </div>

            </div>
        </div>
    </div>
    <!-- Our Values END -->


   

    

  

    <!-- Join_US START -->
    <div class="join">
        <div class="container p-sm-0">
            <div class="row">
                <div class="card join__card">
                    <img src="assets/img/BG-Element.png" class="img-fluid join__card-img" alt="image">
                    <div class="card-img-overlay join__card-layer d-flex align-items-center">
                        <div class="col-12 col-md-7">
                            <h2 class="join__heading global__heading text-center text-md-start" style="color: #fff;">
                                Health for All, Healings for the Needy.
                            </h2>
                            <a href="gallery.php" class="global__btn mt-4 ">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Join_US END -->

    <!-- Footer START -->
  <?php include 'footer.php' ?>
    <!-- Footer END -->

    <!-- Jquary -->
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!-- Venobox -->
    <script src="assets/js/venobox.min.js"></script>
    <!-- Counter JS -->
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Slick JS -->
    <script src="assets/js/slick.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Aos JS -->
    <script src="assets/js/aos.js"></script>
    <!-- JS -->
    <script src="assets/js/app.js"></script>
</body>



</html>