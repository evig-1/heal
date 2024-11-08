<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>

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

    /* mkkm */

    .cases__card-img img {
            width: 300px; 
            height: 200px; 
            object-fit: cover; 
        }
        .cases__card-img {
            overflow: hidden; /* Prevents overflow of the image container */
        }

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
            font-size: 1.5rem; /* Adjust font size for mobile */
            text-align: center; /* Center text for mobile */
        }
    }
</style>

<body>

    <!-- GoUp START -->
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <!-- GoUp END -->

    <!-- Navbar START -->

    <?php include 'nav.php' ?>
    <?php include 'db.php' ?>
    <!-- Navbar END -->

    <!--  Banner START -->

    <div class="banner">
        <div class="banner__overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-start">
                        <h1 class="global__title global__title-dark text-capitalize">Events</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="index.php">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                Events
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

 

   



    <div class="cases global__py pt-0">
        <div class="container p-sm-0">
            <div class="row">
                <div class="col-12 col-md-9 col-lg-6 text-center m-auto" data-aos="fade-down" data-aos-duration="1000">
                    <h3 class="global__text">Our Events</h3>
                    <h2 class="global__heading">Explore Our Events and Make a Difference</h2>
                </div>
            </div>
            <div class="row cases__grid">
        <?php
        // Assuming $conn is your database connection
        $sql = "SELECT event_name, event_image, event_description FROM event";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="card cases__card" data-aos="fade-down" data-aos-duration="1000">
                    <div class="cases__card-img">
                        <img class="img-fluid w-100" src="uploads/<?php echo $row['event_image']; ?>" alt="Event Image">
                    </div>
                    <div class="card-body px-4">
                        <div>
                            <span class="cases__card-title"><?php echo $row['event_name']; ?></span>
                        </div>
                        <div class="cases__card-range">
                            <button type="button" class="team__user" style="border:none; background-color:#edf5fe;"
                                onclick="showEventDescription('<?php echo addslashes($row['event_name']); ?>', '<?php echo addslashes($row['event_description']); ?>', '<?php echo addslashes($row['event_image']); ?>')">
                                <h6 class="m-0" style="color:#fffff;">Find Out More</h6>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "No events found.";
        }
        ?>
    </div>
            <div class="row">
                <!-- <div class="col-12 text-center mt-4">
                    <a href="events.php" class="global__btn mt-4">View More</a>
                </div> -->
            </div>
        </div>
    </div>

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

    








    <!--  Cases END  -->

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
        // Function to open the modal and populate its content
        function showEventDescription(name, description, image) {
            var modalEventName = document.getElementById("modalEventName");
            var modalEventDescription = document.getElementById("modalEventDescription");
            var modalEventImage = document.getElementById("modalEventImage");

            modalEventName.textContent = name;
            modalEventDescription.textContent = description;
            modalEventImage.src = "uploads/" + image;

            // Display the modal
            var modal = document.getElementById("eventModal");
            modal.style.display = "block";
        }

        // Function to close the modal
        function closeEventModal() {
            var modal = document.getElementById("eventModal");
            modal.style.display = "none";
        }
    </script>
</body>



</html>