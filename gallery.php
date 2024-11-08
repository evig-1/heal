<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <?php include 'link.php' ?>
</head>

<body>
    <style>
    .gallery__body {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 10px;
        grid-auto-flow: dense;
        /* Allows items to fill gaps vertically */
    }

    .gallery__body-layer {
        position: relative;
        display: block;
        overflow: hidden;
        height: 250px;
        /* Set a fixed height for uniformity */
    }
/* footer */
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
                        <h1 class="global__title global__title-dark text-capitalize">Gallery</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="index.php">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                gallery
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

   


    <div class="gallery global__py pt-0">
        <div class="container">
            <div class="row">
                <div class="category-buttons text-center " style="
    margin: 10px; padding:15px 30px;
">
                    <button class="category-btn " data-category="all" style="
    color: #0a78be;
    background: transparent;
    border-radius: 12px;
    padding: 12px 30px;
    font-size: 20px;
    margin: 48px 0 0 0;
    border: 1px solid #0a78be;
">All</button>
                    <button class="category-btn" data-category="events" style="
    color: #0a78be;
    background: transparent;
    border-radius: 12px;
    padding: 12px 30px;
    font-size: 20px;
    margin: 48px 0 0 0;
    border: 1px solid #0a78be;
">Events</button>
                    <button class="category-btn" data-category="news" style="
    color: #0a78be;
    background: transparent;
    border-radius: 12px;
    padding: 12px 30px;
    font-size: 20px;
    margin: 48px 0 0 0;
    border: 1px solid #0a78be;
">News</button>
                    <button class="category-btn" data-category="teams" style="
    color: #0a78be;
    background: transparent;
    border-radius: 12px;
    padding: 12px 30px;
    font-size: 20px;
    margin: 48px 0 0 0;
    border: 1px solid #0a78be;
">Teams</button>
                </div>


                <!-- <div class="gallery__body">
                    
                   <a class="gallery__body-layer vbox-item" data-gall="gallery01" data-category="events"
                        href="assets/img/gallery-9.png">
                        <img class="img-fluid" src="assets/img/gallery-9.png" alt="Event Image">
                    </a>
                </div> -->

                <div class="gallery__body">
                    <?php
                    $sql = "SELECT category, gallery_image FROM gallery";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo '<a class="gallery__body-layer vbox-item" data-gall="gallery01" data-category="' . $row["category"] . '"';
                            echo ' href="uploads/' . $row["gallery_image"] . '">';
                            echo '<img class="img-fluid" src="uploads/' . $row["gallery_image"] . '" alt="Gallery Image">';
                            echo '</a>';
                        }
                    } else {
                        echo "No images found.";
                    }
                    ?>
                </div>


            </div>
        </div>
    </div>

    <!--  Gallery END -->

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
    document.addEventListener('DOMContentLoaded', () => {
        const buttons = document.querySelectorAll('.category-btn');
        const items = document.querySelectorAll('.gallery__body-layer');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');

                items.forEach(item => {
                    if (category === 'all' || item.getAttribute('data-category') ===
                        category) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
    </script>
</body>



</html>