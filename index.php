<?php
session_start();

include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Heal Society</title>

    <!-- Logo -->
    <?php include 'link.php' ?>

</head>




<style>
/* Modal styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
}

.modal-content {
    background-color: #fefefe;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 600px;
    position: relative;
    border-radius: 10px;
}

.modal-blog {
    text-align: center;
}

.modal-blog h2 {
    font-size: 2em;
    margin-bottom: 20px;
    color: #333;
    text-transform: capitalize;
}

.modal-blog img {
    width: 100%;
    height: auto;
    margin-bottom: 20px;
    border-radius: 10px;
}

.modal-blog p {
    font-size: 1.2em;
    line-height: 1.6;
    color: #666;
    text-align: justify;
}

.close {
    position: absolute;
    top: 10px;
    right: 20px;
    color: #aaa;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

/* footer */

.custom-img-fluid {
    display: block;
    width: 100%;
    object-fit: cover;
}


/* For the index page */
.join-index__card {
    position: relative;
    border: none;
    margin: 0;
    overflow: hidden;
}

.join-index__card-img {
    width: 100%;
    height: auto;
}

.join-index__card-layer {
    background: rgba(0, 0, 0, 0.5);
}

/*  */

@media only screen and (max-width: 768px) {

    .d-none {
        display: block !important;
    }

    .hero__four-image {
        display: block !important;
        margin-bottom: 20px;
    }

    .col-6.my-auto.my-xl-0 {
        /* order: 1; Move the image column to the top on mobile */
        width: 100%;
    }

    .col-12.col-lg-6.position-relative {
        order: 2;
        /* Move the content column below the image on mobile */


    }




    /* about section */
    .col-6.d-none.d-lg-block.position-relative {
        display: block !important;
        width: 100%;
        /* Make the column full width */
    }

    .donation__img img {
        width: 100%;
        /* Adjust the image width to your liking */
        height: auto;
        margin: 20px auto;
        /* Add some margin to center the image */
    }

    .d-none {
        display: none !important;
    }

    .about__image2 img {

        margin: 20px auto;
    }

    .hero__four {
        padding: 20px 0px 110px 0px;

    }

    .d-flex {
        padding-top: 20px;
        /* Adjust the padding value as needed */
    }


    .join-index__heading {
        font-size: 1.5rem;
        /* Adjust font size for mobile */
        text-align: center;
        /* Center text for mobile */
    }

    .text-center-mobile {
        text-align: center;
    }
}
   
</style>



<body>
    <!-- GoUp START -->
    <!-- <button id="topBtn"><i class="fas fa-arrow-up"></i></button> -->
    <!-- Join Now Button -->

    <!-- GoUp END -->

    <div class="hero__banner-bg">
        <!-- Navbar START -->

        <?php include 'nav.php'; ?>



        <!-- Navbar END -->

        <!-- Hero_Four START  -->


        <header class="hero__four">
            <div class="container p-sm-0">
                <div class="text-center d-lg-none">
                    <img class="menu__logo-img" src="assets/img/123.png" alt="logo">
                </div>
                <div class="hero__four-layer d-none d-lg-block"></div>
                <div class="row align-items-center justify-content-between">
                    <div class="col-12 col-lg-6 position-relative">
                        <div class="d-flex align-items-center">
                            <img class="hero__two-i" src="assets/img/start.png" alt="icon">
                            <h4 class="global__rise">From Health to Hope: Your Gift, Their Growth
                            </h4>
                        </div>
                        <h1 class="global__title global__title-dark">Hope in Action, Inspiring Tomorrow</h1>
                        <p class="global__desc">Empower change by crowdfunding for charity, uniting family, friends, and
                            strangers to support causes and make a lasting impact together.</p>
                        <div class="hero__four-element text-wrap d-flex">
                            <a href="donate.php" class="global__btn d-inline-block">Donate Now
                                <i
                                    class="fa-solid fa-hand-holding-medical global__btn-icon ms-1 py-1 d-none d-sm-inline"></i>
                            </a>
                            <!-- <a href="donate.php" class="global__btn d-inline-block">Donate Now
                                <img src="assets/img/design.png" alt="Donate Icon" class="d-inline"
                                   style="width: 20px; height: 20px;">
                            </a> -->

                            <a href="https://chat.whatsapp.com/KAutxo83bgsB39X5wpGRby" class="global__btn ms-2">Join Us
                                <i class="fa-brands fa-whatsapp global__btn-icon ms-1 d-none d-sm-inline"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 my-auto my-xl-0 d-none d-lg-block">
                        <div class="d-none d-lg-flex justify-content-end">
                            <div class="hero__four-image">
                                <img class="img-fluid" src="assets/img/header-img-4.png" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile-only logo -->
                <!-- <div class="text-center d-lg-none">
                    <img class="menu__logo-img" src="assets/img/123.png" alt="logo" style="max-height: 100px;">
                </div> -->
            </div>
        </header>

        <!-- Hero_Four END  -->
    </div>



    <!-- Donation START -->

    <div class="donation">
        <div class="container p-sm-0">
            <div class="row align-items-center justify-content-between" data-aos="fade-right" data-aos-duration="1000">
                <div class="col-6 d-none d-lg-block position-relative">
                    <img class="donation__element3" src="assets/img/element.png" alt="image">
                    <div class="donation__img d-flex justify-content-center">
                        <img class="img-fluid" src="assets/img/add-img-5.png" alt="image">
                    </div>
                </div>
                 <!-- <div class="col-12 col-md-9 col-lg-5" data-aos="fade-left" data-aos-duration="1000">
                    <h3 class="global__text">about us</h3>
                    <h2 class="donation__heading global__heading">
                        Together We Heal, Together We Rise

                    </h2>
                    <p class="donation__desc global__desc mb-3">
                    <h5 class="donation__heading global__heading" style="font-size:18px !important;">Who We Are</h5>
                    At our organization, we are passionately committed to
                    transforming the lives of disadvantaged children through vital support such as nutritious meals,
                    educational opportunities, and healthcare services.</p>


                    <p class="donation__desc global__desc mb-3">
                    <h5 class="donation__heading global__heading" style="font-size:18px !important;">Our Aim</h5>
                    To provide medical facilities to the less fortunate people, slum areas, and roadside living people
                    who can't afford them and are unaware of them. We help them get cured.</p>


                    

                    <div class="mt-5">
                        <a href="about.php" class="donation__btn global__btn">learn more</a>
                    </div>
                </div>  -->
                <div class="col-12 col-md-9 col-lg-5 aos-init aos-animate text-center-mobile" data-aos="fade-left" data-aos-duration="1000">
    <h3 class="global__text">about us</h3>
    <h2 class="donation__heading global__heading">
        Together We Heal, Together We Rise
    </h2>
    <p class="donation__desc global__desc mb-3"></p>
    <h5 class="donation__heading global__heading" style="font-size:18px !important;">Who We Are</h5>
    <p>At our organization, we are passionately committed to transforming the lives of disadvantaged children through vital support such as nutritious meals, educational opportunities, and healthcare services.</p>
    <p class="donation__desc global__desc mb-3"></p>
    <h5 class="donation__heading global__heading" style="font-size:18px !important;">Our Aim</h5>
    <p>To provide medical facilities to the less fortunate people, slum areas, and roadside living people who can't afford them and are unaware of them. We help them get cured.</p>
    
    <div class="mt-5">
        <a href="about.php" class="donation__btn global__btn">learn more</a>
    </div>
</div>

            </div>
        </div>
    </div>

    <!-- Donation END -->

    <!-- Service START  -->

    <div class="service service__bg2 global__py">
        <div class="container p-sm-0">
            <div class="row align-items-center">
                <div class="col-12 col-xl-4 text-center text-xl-start mb-5 mb-xl-0" data-aos="fade-right"
                    data-aos-duration="1000">
                    <h2 class="global__heading m-0">Our Features
                    </h2>
                    <p class="about__desc global__desc mt-3 mb-0">We believe that we can save more life with you.
                    </p>
                    <div class="mt-5">
                        <a href="donate.php" class="global__btn mt-4">donate now</a>
                        <a href="https://chat.whatsapp.com/KAutxo83bgsB39X5wpGRby" class="global__btn mt-4">Join now</a>
                    </div>


                </div>
                <div class="col-md-6 col-xl-4 pe-md-3" data-aos="fade-left" data-aos-duration="1000">
                    <div class="service__card global__white">
                        <div class="global__icon global__icon-white service__card-icon2">
                            <img src="assets/img/box.png" alt="image" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <h3 class="service__card-heading global__heading">Support our cause</h3>
                            <p class="service__card-desc global__desc mt-3 mb-0">Join hands with us to make a meaningful
                                impact in the lives of underprivileged children.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4 ps-md-3" data-aos="fade-right" data-aos-duration="1000">
                    <div class="service__card global__white">
                        <div class="global__icon global__icon-white service__card-icon2">
                            <img src="assets/img/hands.png" alt="image" style="height: 32px; width: 32px;">
                        </div>
                        <div class="">
                            <h3 class="service__card-heading global__heading">Community care</h3>
                            <p class="service__card-desc global__desc mt-3 mb-0">Enrich lives through community service,
                                supporting charities that uplift underprivileged individuals .</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Service END  -->

    <!--  events START  -->

    <div class="cases global__py">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-6 text-center m-auto" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="global__text">Our Events</h3>
                    <h2 class="global__heading">Explore Our Events and Make a Difference</h2>
                </div>
            </div>
            <div class="row">
                <?php
            $sql = "SELECT event_name, event_image, dates, event_description FROM event LIMIT 3"; // Limiting to 3 events
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col-12 col-md-6 col-lg-4 mb-4">'; // Adjust column width as needed
                    echo '<div class="card cases__card">';
                    echo '<div class="cases__card-img">';
                    echo '<img class="img-fluid w-100" src="uploads/' . $row["event_image"] . '" alt="Event Image">';
                    echo '</div>';
                    echo '<div class="card-body px-4">';
                    echo '<div>';
                    echo '<span class="cases__card-title">' . $row["event_name"] . '</span>';
                    echo '</div>';
                    echo '<div class="cases__card-range">';
                    echo '<button type="button" class="team__user" style="border:none; background-color:#edf5fe;" onclick="showEventDescription(\''
                        . addslashes($row["event_name"]) . '\', \''
                        . addslashes($row["event_description"]) . '\', \''
                        . addslashes($row["event_image"]) . '\')">';
                    echo '<h6 class="m-0" style="color:#fffff;">Find Out More</h6>';
                    echo '</button>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                echo '<div class="col-12 text-center mt-4">';
                echo '<a href="events.php" class="global__btn mt-4">View More</a>';
                echo '</div>';
            } else {
                echo "No events found.";
            }
            ?>
            </div>
        </div>
    </div>




    <!-- Modal Structure -->
    <div id="eventModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEventModal()">&times;</span>
            <div class="modal-blog">
                <h2 id="modalEventName"></h2>
                <img id="modalEventImage" class="img-fluid" src="" alt="Event Image">
                <p id="modalEventDescription"></p>
            </div>
        </div>
    </div>






    <!--  evensts End-->

    <!-- hello section -->

    <div class="about global__py pt-0">
        <div class="about__layer d-none d-lg-block"></div>
        <div class="container p-sm-0">
            <div class="row align-items-center">
                <div class="col-6 my-auto my-xl-0" data-aos="fade-right" data-aos-duration="1000">
                    <div class="d-none d-lg-flex gap-4">
                        <div class="about__image2">
                            <img class="img-fluid" src="assets/img/add-3.png" alt="image">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-9 col-lg-6 about__ele " data-aos="fade-left" data-aos-duration="1000">
                    <h2 class="about__heading global__heading">
                        Empower Change with Our Fundraising Platform
                    </h2>
                    <p class="about__desc global__desc mb-3">Empower your fundraising efforts with our versatile
                        crowdfunding solutions, designed for both organizations and individuals.</p>

                    <div class="">
                        <ul class="about__list">
                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.png" alt="icon">
                                <span class="global__desc m-0">
                                    Explore Campaigns
                                </span>
                            </li>
                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.png" alt="icon">
                                <span class="global__desc m-0">
                                    Engage your community
                                </span>
                            </li>
                            <li>
                                <img class="cases__card-range--dollar p-1 me-2" src="assets/img/check.png" alt="icon">
                                <span class="global__desc m-0">
                                    Effortlessly handle donations
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- hello section -->
    <!--  Gallery START -->

    <div class="gallery global__py pb-0">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-7 text-center m-auto" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="global__text">Our Gallery</h3>
                    <h2 class="global__heading">Withdrawing Transformation a Glimpse Of Hope
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 gallery__body-two" data-aos="fade-right" data-aos-duration="1000">
                    <div class="mb-4">
                        <a class="gallery__body-layer d-block" data-gall="gallery01" href="assets/img/g-1.png">
                            <img class="img-fluid w-100 gallery__body-two--img" src="assets/img/g-1.png" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 gallery__body-two" data-aos="fade-left" data-aos-duration="1000">
                    <div class="row">
                        <div class="col-12 col-sm-6 mb-4 mb-md-0">
                            <a class="gallery__body-layer d-block" data-gall="gallery01" href="assets/img/g-2.png">
                                <img class="img-fluid w-100 gallery__body-two--img" src="assets/img/g-2.png"
                                    alt="image">
                            </a>
                        </div>
                        <div class="col-12 col-sm-6 mb-4 mb-md-1">
                            <a class="gallery__body-layer d-block" data-gall="gallery01" href="assets/img/g-3.png">
                                <img class="img-fluid w-100 gallery__body-two--img" src="assets/img/g-3.png"
                                    alt="image">
                            </a>
                        </div>
                        <div class="col-12 col-sm-12 mt-md-3 mt-xxl-4">
                            <a class="gallery__body-layer d-block" data-gall="gallery01" href="assets/img/g-4.png">
                                <img class="img-fluid w-100 gallery__body-two--img" src="assets/img/g-4.png"
                                    alt="image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mt-4">
                    <a href="gallery.php" class="btn btn-primary custom-btn"
                        style="color:#FFF; background:#0a78be;">View More</a>

                </div>
            </div>


        </div>

    </div>
    <!--  Gallery END -->






    <div class="team global__py">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 text-center aos-init aos-animate" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="global__text">Shining Star</h3>
                    <h2 class="global__heading">Volunteer Of The Month</h2>
                </div>
            </div>


            <?php
            $sql = "SELECT volunteer_name, volunteer_image, dates FROM vol_month";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='team__card'>";
                    echo "<div class='team__card-head'>";
                    echo "<img class='img-fluid' src='uploads/" . $row["volunteer_image"] . "' alt='user image' width='302' height='303'>";
                    echo "</div>";
                    echo "<div class='text-center'>"; // Centering content within team__card
                    echo "<h4>" . $row["volunteer_name"] . "</h4>";
            
                    // Format the date
                    $dateObj = DateTime::createFromFormat('Y-m-d', $row["dates"]); // Assuming $row["dates"] is in 'YYYY-MM-DD' format
                    if ($dateObj) {
                        echo "<p>Date: " . $dateObj->format('F Y') . "</p>"; // Format the date as 'Month Year', e.g., 'July 2024'
                    } else {
                        echo "<p>Date: -</p>"; // Handle case where date format is incorrect or not available
                    }
            
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='col-12 col-md-3 text-center team__card'>";
                echo "<div class='team__card-head'>";
                echo "<img class='img-fluid' src='uploads/default-image.jpg' alt='user image'>"; // Default image if no volunteer found
                echo "</div>";
                echo "<div class='text-center'>"; // Centering content within team__card
                echo "<h4>No volunteers found</h4>";
                echo "<p class='team__cate'>Volunteer</p>";
                echo "<p>Date: -</p>";
                echo "</div>";
                echo "</div>";
            }
            ?>


        </div>
    </div>
    <!-- volunteer END -->

    <!--  Testimonial START -->

    <div class="testimonial">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-6 text-center m-auto" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="global__text">Testimonials</h3>
                    <h2 class="global__heading">The Impact In Their Words
                    </h2>
                </div>
            </div>

            <div class="testimonial__body">
                <div class="testimonial__body-slider">
                    <div class="">
                        <div class="testimonial__card">
                            <div class="">
                                <ul class="testimonial__card-ul">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>

                            <div class="">
                                <p class="global__desc testimonial__card-desc">Volunteering with this organization has
                                    been incredibly fulfilling. I've seen firsthand the positive impact.</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="assets/img/test.png" alt="user">
                                    <div class="ps-3">
                                        <h4 class="testimonial__card-name">Dheeraj</h4>
                                        <!-- <span class="testimonial__card-type">
                                            Founder
                                        </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial__card">
                            <div class="">
                                <ul class="testimonial__card-ul">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>

                            <div class="">
                                <p class="testimonial__card-desc global__desc">Supporting this cause has been rewarding
                                    beyond words. Every contribution, big or small, truly makes a difference.</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="assets/img/test.png" alt="user">
                                    <div class="ps-3">
                                        <h4 class="testimonial__card-name">Muskan</h4>
                                        <!-- <span class="testimonial__card-type">
                                            Founder
                                        </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial__card">
                            <div class="">
                                <ul class="testimonial__card-ul">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>

                            <div class="">
                                <p class="testimonial__card-desc global__desc">I'm inspired by the dedication of this
                                    team to improving children's lives. It's heartwarming to be part of something so
                                    impactful.</p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="assets/img/test.png" alt="user">
                                    <div class="ps-3">
                                        <h4 class="testimonial__card-name">Rit</h4>
                                        <!-- <span class="testimonial__card-type">
                                            Founder
                                        </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="testimonial__card">
                            <div class="">
                                <ul class="testimonial__card-ul">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                            </div>

                            <div class="">
                                <p class="global__desc testimonial__card-desc">Being involved with this initiative has
                                    shown me the power of community and compassion. Together, we're changing futures.
                                </p>
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" src="assets/img/test.png" alt="user">
                                    <div class="ps-3">
                                        <h4 class="testimonial__card-name">Rashmika</h4>
                                        <!-- <span class="testimonial__card-type">
                                            Founder
                                        </span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Testimonial END -->


    <!--  brand Section -->
    <!-- 
    <div class="blog global__py">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-6 text-center m-auto" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="global__text">our blog</h3>
                    <h2 class="global__heading">Brands 
                </div>
            </div>
            <div class="brand-section">
    <div class="brand-grid">
      <div class="brand-item">
        <img src="assets/img/images.png" alt="Brand 1">
      </div>
      <div class="brand-item">
        <img src="assets/img/images.png" alt="Brand 2">
      </div>
      <div class="brand-item">
        <img src="assets/img/images.png" alt="Brand 3">
      </div>
      <div class="brand-item">
        <img src="assets/img/images.png" alt="Brand 4">
      </div>
    </div>
    <div class="view-more">
        <a href="#" id="viewMoreBtn">View More Brands</a>
      </div>
  </div>
        </div>
    </div> -->

    <!--  Brand section -->


    <!--  Blog START -->

    <!-- <div class="blog global__py">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-6 text-center m-auto" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="global__text">our blog</h3>
                    <h2 class="global__heading">Checkout latest news
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__body blog__body">
                    <div class="blog__body-slider">
                        <div class="card blog__card">
                            <a href="blog.html">
                                <img class="img-fluid w-100" src="assets/img/img-4.png" alt="image">
                            </a>
                            <div class="card-body px-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="">
                                        <span class="blog__card-span">Donation</span>
                                    </div>
                                    <hr class="blog__card-line">
                                    <div class="">
                                        <span class="blog__card-span">October 25, 2023</span>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="blog.html" class="blog__title">4 Steps to Take on Your Next
                                        Giving
                                        Tuesday</a>
                                    <p class="global__desc blog__desc">consectetur adipisicing elit,
                                        sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim
                                        veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card blog__card">
                            <a href="blog.html">
                                <img class="img-fluid w-100" src="assets/img/img-5.png" alt="image">
                            </a>
                            <div class="card-body px-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="">
                                        <span class="blog__card-span">Donation</span>
                                    </div>
                                    <hr class="blog__card-line">
                                    <div class="">
                                        <span class="blog__card-span">October 25, 2023</span>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="blog.html" class="blog__title">5 Creative Giving Tuesday
                                        Nonprofit
                                        Storytelling</a>
                                    <p class="global__desc blog__desc">consectetur adipisicing elit,
                                        sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim
                                        veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card blog__card">
                            <a href="blog.html">
                                <img class="img-fluid w-100" src="assets/img/img-6.png" alt="image">
                            </a>
                            <div class="card-body px-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="">
                                        <span class="blog__card-span">Donation</span>
                                    </div>
                                    <hr class="blog__card-line">
                                    <div class="">
                                        <span class="blog__card-span">October 25, 2023</span>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="blog.html" class="blog__title">Tips for Retaining Donors
                                        After Your
                                        Giving
                                        Campaign</a>
                                    <p class="global__desc blog__desc">consectetur adipisicing elit,
                                        sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim
                                        veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card blog__card">
                            <a href="blog.html">
                                <img class="img-fluid w-100" src="assets/img/img-5.png" alt="image">
                            </a>
                            <div class="card-body px-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="">
                                        <span class="blog__card-span">Donation</span>
                                    </div>
                                    <hr class="blog__card-line">
                                    <div class="">
                                        <span class="blog__card-span">October 25, 2023</span>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="blog.html" class="blog__title">5 Creative Giving Tuesday
                                        Nonprofit
                                        Storytelling</a>
                                    <p class="global__desc blog__desc">consectetur adipisicing elit,
                                        sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim
                                        veniam.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card blog__card">
                            <a href="blog.html">
                                <img class="img-fluid w-100" src="assets/img/img-4.png" alt="image">
                            </a>
                            <div class="card-body px-4">
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div class="">
                                        <span class="blog__card-span">Donation</span>
                                    </div>
                                    <hr class="blog__card-line">
                                    <div class="">
                                        <span class="blog__card-span">October 25, 2023</span>
                                    </div>
                                </div>
                                <div class="">
                                    <a href="blog.html" class="blog__title">4 Steps to Take on Your Next
                                        Giving
                                        Tuesday</a>
                                    <p class="global__desc blog__desc">consectetur adipisicing elit,
                                        sed
                                        do
                                        eiusmod tempor
                                        incididunt ut labore et dolore
                                        magna aliqua. Ut enim ad minim
                                        veniam.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!--  Blog END -->


    <!--  Join_US START -->

    <!-- <div class="join">
        <div class="container p-sm-0">
            <div class="row">
                <div class="card join__card">
                    <img src="assets/img/BG-Element.png" class="img-fluid join__card-img" alt="image">
                    <div class="card-img-overlay join__card-layer">
                        <div class="col-11 col-md-7">
                          
                            <h2 class="join__heading global__heading" style="
    color: #fff;
">Health for All, Healings for the Needy.
                            </h2>
                          
                            <a href="gallery.php" class="global__btn mt-4">Discover More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="join">
        <div class="container p-sm-0">
            <div class="row">
                <div class="card join__card">
                    <img src="assets/img/BG-Element.png" class="custom-img-fluid join__card-img" alt="image">
                    <div class="card-img-overlay join__card-layer d-flex align-items-center">
                        <div class="col-12 col-md-7">
                            <h2 class="join__heading global__heading text-center text-md-start" style="color: #fff;">
                                Health for All, Healings for the Needy.
                            </h2>
                            <a href="gallery.php" class="global__btn mt-4">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!--  Join_US END -->

    <!--  Footer START -->

    <?php include 'footer.php' ?>

    <!--  Footer END -->

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

    <script>
    function showEventDescription(name, description, image) {
        var modalEventName = document.getElementById("modalEventName");
        var modalEventDescription = document.getElementById("modalEventDescription");
        var modalEventImage = document.getElementById("modalEventImage");

        modalEventName.textContent = name;
        modalEventDescription.textContent = description;
        modalEventImage.src = "uploads/" + image;


        var modal = document.getElementById("eventModal");
        modal.style.display = "block";
    }


    function closeEventModal() {
        var modal = document.getElementById("eventModal");
        modal.style.display = "none";
    }
    </script>




</body>



</html>