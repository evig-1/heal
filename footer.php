<style>
.donate-btn {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    transition: width 0.4s ease;
    overflow: hidden;
    white-space: nowrap;
    position: relative;
    text-decoration: none;
}

.donate-btn i {
    font-size: 20px;
    transition: transform 0.4s ease;
}

.donate-btn:hover {

    width: auto;

    text-decoration: none;
    padding: 2px 12px !important;
}

.donate-text {

    display: none;
    opacity: 0;
    transition: opacity 0.4s ease;
    font-size: 14px;
}

.donate-btn:hover .donate-text {
    opacity: 1;
    display: inline;
}


@media (max-width: 768px) {
    .btn-link{
       
        inset: auto -29px -38px auto;
        height: 40px;
        width: 40px;
    }


}
</style>
<div class="footer">
    <div class="container p-sm-0">
        <div class="row justify-content-between">
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <a href="index.php">
                    <img class="img-fluid" src="assets/img/logo3.png" alt="logo">
                </a>
                <p class="global__desc footer__desc">Nourishing young minds with Health and Education, building brighter
                    futures one meal and lesson at time.</p>
                
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-2 d-md-flex justify-content-center my-5 my-md-0">
                <div class="">
                    <h4 class="footer__sub fw-bold">explore</h4>
                    <ul class="footer__list">
                        <li>
                            <a class="footer__list-item" href="about.php">
                                about us
                            </a>
                        </li>
                        <li>
                            <a class="footer__list-item" href="gallery.php">
                                Gallery
                            </a>
                        </li>
                        <!-- <li>
                            <a class="footer__list-item" href="blog.php">
                                blog
                            </a>
                        </li> -->
                        <li>
                            <a class="footer__list-item" href="privacy.php">
                                Privacy & Policy
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-2 mb-5 mb-md-0 mt-md-5 mt-lg-0">
                <div class="">
                    <h4 class="footer__sub fw-bold">Useful Links</h4>
                    <ul class="footer__list">
                        <li>
                            <a class="footer__list-item" href="donate.php">
                                Give Donation
                            </a>
                        </li>
                        <li>
                            <a class="footer__list-item" href="contact.php">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a class="footer__list-item" href="events.php">
                                Events
                            </a>
                        </li>
                        <!-- <li>
                            <a class="footer__list-item" href="donate.html">
                                Other Ways to Give
                            </a>
                        </li>  -->
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-4 mt-md-5 mt-xl-0">
                <h4 class="footer__sub fw-bold">Connect With Us</h4>
                <!-- <p class="global__desc footer__desc">Join our newsletter to stay updated about our latest Events.
                </p>
                <form action="#" method="POST" class="d-flex position-relative">
                    <input class="footer__inp form-control" type="text" placeholder="Enter your email">
                    <button class="global__btn footer__inp-btn">subscribe</button>
                </form> -->
                <div class="footer__social">
                    <ul class="footer__social-ul">
                        <li>
                            <a class="footer__social-link" href="https://chat.whatsapp.com/KAutxo83bgsB39X5wpGRby">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                        </li>
                        <li>
                            <a class="footer__social-link" href="mailto:info@healsociety.in"> <i
                                    class="fas fa-envelope"></i></a>
                        </li>
                        <li>
                            <a class="footer__social-link" href="https://www.instagram.com/healsocietyy"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </li>
                        <!-- <li>
                            <a class="footer__social-link" href="https://twitter.com/"><i
                                    class="fa-brands fa-youtube"></i></a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
        <hr class="footer__border">
        <div class="row">
            <div class="col-12 text-center">
                <style>
                .footer_bottom a.hove:hover {
                    color: #ffcc00;
                   
                    text-decoration: underline;
                 
                }
                </style>
               
                <p class="footer_bottom" style="color:#fff">
                    Developed By Devmind Technologies </p>

            </div>
        </div>
    </div>
</div>


<div class="position-fixed" style="inset:auto 40px 100px auto; z-index:999999999;">
    
        <a href="https://chat.whatsapp.com/KAutxo83bgsB39X5wpGRby"
            class="btn-link p-2 d-inline-block text-center align-content-center donate-btn"
            style="background: #0a78be;  border-radius: 100px;  color:#fff; border:none; cursor: pointer; ">
            <i class="fa-brands fa-whatsapp"></i>
            <span class="donate-text ms-2 fw-bold">Join Us</span>
        </a>
   
</div>
<div class="position-fixed" style="inset:auto 40px 160px auto; z-index:999999999;">
   

        <a href="donate.php" class="btn-link p-2 d-inline-block text-center align-content-center donate-btn"
            style="background: #0a78be;  border-radius: 100px;  color:#fff; border:none; cursor: pointer; ">
            <i class="fa-solid fa-hand-holding-medical"></i>
            <span class="donate-text ms-2 fw-bold">Donate Now</span>
        </a>
        <!-- <a href="donate.php" class="btn-link p-2 d-inline-block text-center align-content-center donate-btn"
    style="background: #0a78be;  border-radius: 100px;  color:#fff; border:none; cursor: pointer;">
    <img src="assets/img/design.png" alt="Donate Icon" style="width: 20px; height: 20px;">
    <span class="donate-text ms-2 fw-bold">Donate Now</span>
</a> -->

<!-- <a href="donate.php" class="btn-link p-2 d-inline-block text-center align-content-center donate-btn"
    style="background: #0a78be;  border-radius: 100px;  color:#fff; border:none; cursor: pointer;">
    <img src="assets/img/design.png" alt="Donate Icon" style="width: 20px; height: 20px; filter: brightness(0) invert(1);">
    <span class="donate-text ms-2 fw-bold">Donate Now</span>
</a> -->


</div>






<button id="topBtn"><i class="fas fa-arrow-up"></i></button>