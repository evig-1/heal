<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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

    @media (max-width: 768px) {
        .join__heading {
            font-size: 1.5rem;
            /* Adjust font size for mobile */
            text-align: center;
            /* Center text for mobile */
        }
    }
    </style>
</head>

<body>
    <!-- GoUp START -->
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <!-- GoUp END -->

    <!-- Navbar START -->

    <?php include 'nav.php' ?>

    <!-- Navbar END -->

    <!--  Banner START -->

    <div class="banner">
        <div class="banner__overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-start">
                        <h1 class="global__title global__title-dark text-capitalize">contact us</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="index.php">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                contact us
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- <div class="banner__element d-none d-lg-block">
                    <img src="assets/img/element-3.svg" alt="image">
                </div> -->
                <div class="banner__polygon d-none d-lg-block">
                    <img src="assets/img/polygon.svg" alt="image">
                </div>
            </div>
        </div>
    </div>

    <!--  Banner END -->

    <!--  location-->

    <div class="social global__py pt-0">
        <div class="container p-sm-0">
            <div class="row justify-content-center gap-5 gap-lg-0">
                <div class="col-12 col-sm-10 col-lg-4">
                    <div class="social__body">
                        <div class="">
                            <!-- <div class="social__body--loc"></div> -->
                            <div class="social__i">
                                <img class="" src="assets/img/location.png" alt="image">
                            </div>
                            <div class="">
                                <h4 class="social__text">Our Location</h4>
                                <p class="social__number">Near Water Tank, Kheme Ka Kua, Pal Road, Jodhpur, Rajasthan
                                    342008</p>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-12 col-sm-10 col-lg-4">
                    <div class="social__body">
                        <div class="">
                            <!-- <div class="social__body--mail"></div> -->
                            <div class="social__i">
                                <img class="" src="assets/img/mail-icon.png" alt="image">
                            </div>
                            <div class="">
                                <h4 class="social__text">Send Mail</h4>
                                <p class="social__number">info@healsociety.in</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- location -->

    <!--  Contact START -->

    <div class="contact global__py pt-0">
        <div class="container p-sm-0">
            <div class="row">
                <form action="process.php" method="POST" class="contact__form" id="myForm">
                    <div class="col-12 col-md-9 col-lg-6 text-center m-auto" data-aos="fade-down"
                        data-aos-duration="1000">
                        <h3 class="global__text">Contact Us</h3>
                        <h2 class="global__heading">Get in Touch With Us</h2>
                    </div>
                    <div class="contact__form-body">
                        <div class="">
                            <input type="text" id="name" name="name" placeholder="Enter Your Name"
                                class="contact__form-inp form-control" required>
                        </div>
                        <div class="">
                            <input type="email" id="email" name="email" placeholder="Enter Your Email"
                                class="contact__form-inp form-control" required>
                        </div>
                        <div class="">
                            <!-- <input type="tel" id="phoneno" name="phoneno" placeholder="Enter Phone Number"
                            class="contact__form-inp form-control" required> -->
                            <input type="tel" id="phoneno" name="phoneno" placeholder="Enter Phone Number"
                                class="contact__form-inp form-control" required pattern="\d{1,10}"
                                title="Please enter a number between 1 and 10 digits." maxlength="10">

                        </div>
                        <div class="">
                            <input type="text" id="state" name="state" placeholder="Enter Your State"
                                class="contact__form-inp form-control" required>
                        </div>
                        <div class="">
                            <input type="text" id="city" name="city" placeholder="Enter Your City"
                                class="contact__form-inp form-control" required>
                        </div>
                        <div class="">
                            <input type="text" id="zip" name="zip" placeholder="Enter Zip Code"
                                class="contact__form-inp form-control" required>
                        </div>
                        <div class="contact__form-body--comnt">
                            <textarea class="contact__form-inp form-control" id="message" name="message" cols="30"
                                rows="5" placeholder="Write Your Message"></textarea>
                        </div>
                        <div>
                            <button type="button" class="btn donation__btn global__btn mt-0"
                                onclick="submitForm()">Submit</button>
                        </div>
                    </div>

                    <div id="loadingIndicator" style="display: none; text-align: center; margin-top: 20px;">
                        <!-- <img src="loading.gif" alt="Loading..." width="50"> -->
                        <p>Sending your Message...</p>
                    </div>
                </form>

                <!-- 
            <div id="loadingIndicator" style="display: none; text-align: center; margin-top: 20px;">
    <img src="loading.gif" alt="Loading..." width="50">
    <p>Sending your message...</p>
</div> -->

                <!-- <div id="confirmationMessage" style="display: none; background-color: rgb(237, 245, 254); padding: 60px; margin-top: 20px; text-align: center; border-radius: 12px;">
    <p>Your message has been sent successfully!</p>
</div> -->

                <div id="confirmationMessage"
                    style="display: none; background-color: rgb(237, 245, 254); padding: 60px; margin-top: 20px; text-align: center; border-radius: 12px;">
                    <img src="assets/img/jack.gif" alt="Loading..." width="50" style="margin-bottom: 20px;">
                    <p>Your Message Has Been Sent Successfully!</p>
                </div>



            </div>
        </div>
    </div>



    <!--  Contact END -->

    <!--  Map START -->

    <div class="contact__map">
        
        <iframe class="w-100"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3578.2201965856707!2d72.97981907524807!3d26.25451597704565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418ea344d1682b%3A0x7ded4a0a37303c6!2sKheme%20Ka%20Kua!5e0!3m2!1sen!2sin!4v1721734160941!5m2!1sen!2sin"
            width="600" height="785" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!--  Map END -->

    <!--  Join_US START -->

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
    document.getElementById('phoneno').addEventListener('input', function() {
        this.value = this.value.replace(/\D/g, ''); 
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10); 
        }
    });
    </script>



    <script>
    function submitForm() {
        // Validate form inputs
        let name = document.getElementById("name").value.trim();
        let email = document.getElementById("email").value.trim();
        let phoneno = document.getElementById("phoneno").value.trim();
        let state = document.getElementById("state").value.trim();
        let city = document.getElementById("city").value.trim();
        let zip = document.getElementById("zip").value.trim();
        let message = document.getElementById("message").value.trim();

        if (name === '' || email === '' || phoneno === '' || state === '' || city === '' || zip === '' || message ===
            '') {
            alert('Please fill in all fields');
            return;
        }

        // Disable the submit button to prevent multiple submissions
        document.querySelector(".donation__btn").disabled = true;

        // Show loading indicator
        document.getElementById("loadingIndicator").style.display = "block";

        // Prepare form data
        let formData = new FormData(document.getElementById("myForm"));

        // Send form data using fetch
        fetch('process.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Hide the form
                document.getElementById("myForm").style.display = "none";
                // Display the confirmation message
                document.getElementById("confirmationMessage").style.display = "block";
            })
            .catch(error => {
                console.error('Error:', error);
                // Optionally display an error message to the user
            })
            .finally(() => {
                // Hide loading indicator
                document.getElementById("loadingIndicator").style.display = "none";

                // Re-enable the submit button after form submission completes
                document.querySelector(".donation__btn").disabled = false;
            });
    }
    </script>


</body>



</html>