<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>

    <!-- Logo -->
    <?php include 'link.php'; ?>
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

    @media only screen and (max-width: 768px) {
        .col-6.pl-2.text-center {
            text-align: left;
            /* Change text alignment to left on mobile */
        }

        .col-6.pl-2.text-center div {
            font-size: 1.2rem;
            /* Keep font size consistent */
            padding-top: 12px;
            /* Keep padding top consistent */
        }

        .col-6.pl-2.text-center p {
            margin: 0;
            /* Remove margins from paragraphs */
            padding: 4px 0;
            /* Add some padding between paragraphs */
        }

        .join__heading {
            font-size: 1.5rem;
            /* Adjust font size for mobile */
            text-align: center;
            /* Center text for mobile */
        }

        .bank-details p {
            font-size: 1rem;
        }
    }
    </style>


</head>


<body>

    <!-- GoUp START -->
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <!-- GoUp END -->




    <!-- Navbar START -->

    <?php include 'nav.php'; ?>

    <!-- Navbar END -->

    <!--  Banner START -->

    <div class="banner">
        <div class="banner__overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-start">
                        <h1 class="global__title global__title-dark text-capitalize">Donate Now</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="index.php">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                Donate Now
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

    <!-- Donate START -->

    <div class="donate global__py pt-0">
        <div class="container p-sm-0">


            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="col-md-10">
                        <h2 class="global__heading">Donate Now</h2>
                    </div>
                </div>
            </div>


            <!-- Form -->
            <div class="">
                <form action="donat.php" method="POST" class="form mt-0 border-0">
                    <div class="row">
                        <!-- First Column: Bank Details -->

                        <div class="col-12 col-md-6 text-center">
                            <h4 class="form__heading form__mb">UPI QR Code</h4>
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <img src="assets/img/bank_qr.png" alt="UPI QR Code" class="img-fluid"
                                        style="max-width: 300px; height: auto;">
                                </div>
                                <p class="pt-2 fw-bold">UPI ID - healsociety@sbi</p>
                            </div>
                        </div>


                        <div class="col-12 col-md-6 text-center">
                            <h4 class="form__heading form__mb">Bank Details</h4>
                            <div class="bank-details" style="font-size: 1.2rem; padding-top: 12px;">
                                <p style="margin: 0;">Account Holder - Heal Society</p>
                                <p style="margin: 0;">Bank Name - State Bank of India</p>
                                <p style="margin: 0;">Account Number - 43236583041</p>
                                <p style="margin: 0;">IFSC Code - SBIN0031202</p>
                            </div>
                        </div>
                    </div>
                    <hr class="form__border">
                    <div class="form__mb">
                        <ul class="form__ul">
                            <!-- Donation Options -->
                            <!-- Adjust according to your design -->
                        </ul>
                    </div>
                    <div class="form__mb">
                        <h4 class="form__heading form__mb">Personal Information</h4>
                        <div class="d-sm-flex col-12">
                            <div class="col-sm-6 pe-sm-3">
                                <label for="name">First Name</label>
                                <input type="text" id="name" name="name" class="form-control form__input" required>
                            </div>
                            <div class="col-sm-6 ps-sm-3 mt-4 mt-sm-0">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lname" class="form-control form__input" required>
                            </div>
                        </div>
                        <div class="col-12 mt-4">
                            <div>
                                <label for="email">Email Address</label>
                                <input type="email" id="email" name="email" class="form-control form__input" required>
                            </div>
                            <div class="mt-4">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="5" cols="30"
                                    class="form-control form__input" required></textarea>
                            </div>
                            <div class="pt-4">
                                <button type="button" class="btn donation__btn global__btn mt-0"
                                    onclick="submitForm()">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Confirmation Message Section -->
            <div id="confirmationMessage"
                style="display: none; background-color: rgb(237, 245, 254); padding: 60px; margin-top: 20px; text-align: center; border-radius: 12px;">
                <img src="assets/img/jack.gif" alt="Loading..." width="50" style="margin-bottom: 20px;">
                <p>Your Information Has Been Sent Successfully!</p>
            </div>



            <!-- </div> -->
            <!-- Right Sider_Bar   -->

        </div>
    </div>
    </div>


    <!-- Donate END -->

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

    <?php include 'footer.php'; ?>

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
    function submitForm() {
        // Validate form inputs
        let name = document.getElementById("name").value.trim();
        let lname = document.getElementById("lname").value.trim();
        let email = document.getElementById("email").value.trim();
        let message = document.getElementById("message").value.trim();

        if (name === '' || lname === '' || email === '' || message === '') {
            alert('Please Fill All The Fields');
            return;
        }

        // Disable the submit button to prevent multiple submissions
        document.querySelector(".donation__btn").disabled = true;

        // Show loading indicator and hide form
        document.getElementById("confirmationMessage").style.display = "block";
        document.querySelector("form").style.display = "none";

        // Prepare form data
        let formData = new FormData(document.querySelector("form"));

        // Send form data using fetch
        fetch('donat.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                // Log response for debugging
                console.log(data);
                // Optionally, you can handle the response here, e.g., show success message
                // Update UI after successful submission if needed
            })
            .catch(error => {
                console.error('Error:', error);
                // Optionally display an error message to the user
            })
            .finally(() => {
                // Re-enable the submit button after form submission completes
                document.querySelector(".donation__btn").disabled = false;
            });
    }
    </script>



</body>



</html>