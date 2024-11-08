<?php
session_start();


include 'db.php';



// Process the form submissions and store relevant data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle Add Volunteer form submission
    if (isset($_POST['volunteer_name'], $_FILES['volunteer_image'], $_POST['date'])) {
        $name = $_POST['volunteer_name'];
        $volunteer_image = $_FILES['volunteer_image']['name'];
        $date = $_POST['date'];

        // Move uploaded file to the uploads directory
        $target_directory = 'uploads/';
        $target_file = $target_directory . basename($_FILES['volunteer_image']['name']);
        move_uploaded_file($_FILES['volunteer_image']['tmp_name'], $target_file);



        $sql = "INSERT INTO vol_month (volunteer_name, volunteer_image, dates) VALUES ('$name', '$volunteer_image', '$date')";
        if ($conn->query($sql) === TRUE) {
            header("Location: thankyou.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }


    // Handle Add Images to Gallery form submission
    if (isset($_POST['category'], $_FILES['gallery_image'])) {
        $category = $_POST['category'];
        $gallery_image = $_FILES['gallery_image']['name'];


        move_uploaded_file($_FILES['gallery_image']['tmp_name'], 'uploads/' . $gallery_image);


        $sql = "INSERT INTO gallery (category, gallery_image) VALUES ('$category', '$gallery_image')";
        if ($conn->query($sql) === TRUE) {
            header("Location: thankyou.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Handle Add Event form submission
    if (isset($_POST['event_name'], $_FILES['event_photo'], $_POST['event_date'], $_POST['event_description'])) {
        $event_name = $_POST['event_name'];
        $event_photo = $_FILES['event_photo']['name'];
        $event_date = $_POST['event_date'];
        $event_description = $_POST['event_description'];


        move_uploaded_file($_FILES['event_photo']['tmp_name'], 'uploads/' . $event_photo);


        $sql = "INSERT INTO event (event_name, event_image, dates, event_description) VALUES ('$event_name', '$event_photo','$event_date','$event_description')";
        if ($conn->query($sql) === TRUE) {
            header("Location: thankyou.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }



    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminInfo</title>

    <?php include 'link.php' ?>
    <?php include 'db.php' ?>
</head>
<style>
    .circle {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        text-align: center;
        background-color: #0a78be;
        /* Replace with your desired background color */
        color: white;
        /* Replace with your desired text color */
        font-size: 20px;
        /* Adjust font size as needed */
        margin-bottom: 20px;
        /* Adjust spacing between circle and heading */
    }

    .global__heading {
        text-align: center;
        margin-top: 20px;
        /* Adjust top margin of heading */
        position: relative;
        /* Enable positioning for the circle */
    }

    .contact__form {
        text-align: center;
        /* Center the form content */
    }

    .contact__form-body {
        text-align: left;
        /* Adjust alignment of form inputs */
    }
</style>

<body>

    <!-- GoUp START -->
    <button id="topBtn"><i class="fas fa-arrow-up"></i></button>
    <!-- GoUp END -->

    <!-- Navbar START -->

    <?php include 'nav.php' ?>
    <div class="banner">
        <div class="banner__overlay">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center text-lg-start">
                        <h1 class="global__title global__title-dark text-capitalize">Admin Info</h1>
                        <ul class="banner__ul">
                            <li class="banner__ul-list p-0">
                                <a class="banner__ul-link" href="index.php">
                                    home
                                </a>
                            </li>
                            <li class="banner__ul-list">
                                Admin Info
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


    <!-- <h1>Admin Page</h1> -->






    <!-- sss -->
    <div class="contact global__py pt-0">
        <div class="container p-sm-0">
            <div class="row">

                <form method="POST" enctype="multipart/form-data" class="contact__form">
                    <div class="circle">1</div>
                    <h3 class="global__heading" style="
    text-align: center;
">Add Volunteer Of The Month</h3>


                    <div class="contact__form-body">

                        <div class="">
                            <label for="month">Volunteer Name:</label>
                            <input type="text" class="contact__form-inp form-control" id="name" name="volunteer_name"
                                required>


                        </div>
                        <div class="">
                            <label for="volunteer_image">Volunteer Image:</label>
                            <input type="file" class="contact__form-inp form-control" id="volunteer_image"
                                name="volunteer_image" accept="image/*" required>


                        </div>

                        <div class="">
                            <label for="date">Date:</label>
                            <input id="phnInp" class="contact__form-inp form-control" name="date" type="date"
                                fdprocessedid="0vploc">





                        </div>
                    </div>

                    <input type="submit" value="Add Volunteer" class="global__btn mt-4">
                </form>
            </div>
        </div>
    </div>




    <div class="contact global__py pt-2">
        <div class="container p-sm-0">
            <div class="row">

                <form method="POST" enctype="multipart/form-data" class="contact__form">
                    <div class="circle">2</div>
                    <h3 class="global__heading" style="
    text-align: center;
">Add Images to Gallery</h3>


                    <div class="contact__form-body">

                        <div class="">
                            <label for="category">Category:</label>
                            <select id="category" name="category" class="contact__form-inp form-control" required>
                                <option value="">Select</option>
                                <option value="news">News</option>
                                <option value="events">Events</option>
                                <option value="teams">Teams</option>
                            </select>


                        </div>
                        <div class="">
                            <label for="gallery_image">Gallery Image:</label>
                            <input type="file" class="contact__form-inp form-control" id="gallery_image"
                                name="gallery_image" accept="image/*" required>


                        </div>


                    </div>

                    <input type="submit" value="Add gallery" class="global__btn mt-4">
                </form>
            </div>
        </div>
    </div>



    <div class="contact global__py pt-2">
        <div class="container p-sm-0">
            <div class="row"></div>


            <form method="POST" enctype="multipart/form-data" class="contact__form">
                <div class="circle">3</div>

                <h3 class="global__heading" style="
    text-align: center;
">Add Event</h3>



                <div class="contact__form-body">
                    <div class="">
                        <label for="event_name">Event Name:</label>
                        <input type="text" class="contact__form-inp form-control" id="event_name" name="event_name"
                            required>

                    </div>
                    <div class="">
                        <label for="event_photo">Event Photo:</label>
                        <input type="file" class="contact__form-inp form-control" id="event_photo" name="event_photo"
                            accept="image/*" required>

                    </div>

                    <div class="contact__form-body--comnt">
                        <label for="event_description">Date:</label>
                        <input type="date" class="contact__form-inp form-control" id="event_date" name="event_date"
                            accept="image/*" required>
                    </div>
                    <div class="contact__form-body--comnt">
                        <label for="event_description">Description:</label>
                        <textarea class="contact__form-inp form-control" id="comment" cols="30" rows="5"
                            name="event_description" placeholder="Write Your Message"></textarea>

                    </div>





                </div>



                <input type="submit" value="Add Event" class="global__btn mt-4">
            </form>
        </div>
    </div>


    <?php include 'footer.php' ?>

</body>

</html>