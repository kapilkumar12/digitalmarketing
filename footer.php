<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
.bg-rules {
    background-position: center top;
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
}

.footer-image {
    background-image: url(footer-back.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}

.footer-overlay {
    position: relative;
}

.footer-overlay::after {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(44, 62, 79, .8);
}

.footer-image .container {
    position: relative;
    z-index: 1;
    padding: 20px;
}

.footer-main-row {
    padding: 20px 30px;
}

.about-section>ul {
    list-style: none;
    padding-left: 0px;
}

.about-section>ul>li,
.explore>ul>li {
    margin-top: 15px;
    list-style: none;
}

.about-section>ul>li>a {
    color: #fff;
    text-decoration: none;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
}


.explore>ul>li>a {
    color: #fff;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
}

.about-section i {
    font-size: 25px;
    width: 30px;
    color: rgb(229, 77, 66);
}


.explore>ul>li>a:hover,
.about-section>ul>li>a:hover {
    color: rgb(229, 77, 66);
}




.about-section h2,
.informations h2,
.explore h2 {
    font-size: 20px
}


@media (max-width: 575px) {

    .about-section,
    .informations,
    .explore {
        text-align: center;
    }
}

.footer-hr {
    border: 1px solid rgb(229, 77, 66);
    opacity: 1;
}

.footer-pragraph-color {
    color: #99A2AA !important;
    margin-left: 35px;
    font-size: 14px !important;
    margin-top: 0 !important;
}

.subscribe-formgroup {
    width: 100%;
}

.subscribe-input {
    width: 100% !important;
    background-color: transparent;
    padding: 10px 20px;
    color: #fff !important;
    transition: all ease-in-out .3s;
    -o-transition: all ease-in-out .3s;
    -webkit-transition: all ease-in-out .3s;
    -moz-transition: all ease-in-out .3s;
}

.form-group {
    position: relative;
    margin-bottom: 20px;
}

.btn-rouned {
    border-radius: 22px;
}

.subscribe-btn {
    padding: 10px 30px;
    position: absolute;
    right: -1px;
    top: 0;
    color: #fff;
}

.second-background-color {
    background-color: #E54D42 !important;
    transition: all ease-in-out .3s;
}

.copyright {
    background-color: #2C3E4F !important;
}

.footer-social-links a {
    color: inherit;
    display: block;
    margin-right: 15px;
    font-size: 22px;
}
</style>

<body>
    <div class="container-fluid bg-rules footer-image text-white footer-overlay">
        <div class="container">
            <div class="row d-flex justify-content-center text-center">
                <div class="col-lg-6">
                    <h2>Newslatter</h2>
                    <form class="form-inline position-relative">
                        <div class="form-group subscribe-formgroup">
                            <input type="email" class="form-control subscribe-input btn-rouned"
                                placeholder="Your Email">
                        </div>
                        <button type="submit" class="btn second-background-color btn-rouned subscribe-btn">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>

            <div class="row footer-main-row">




                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="informations">

                        <h2>Informations</h2>
                        <hr class="footer-hr">
                        <p class="mt-4">
                            ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="about-section">

                        <h2>Contact us</h2>
                        <hr class="footer-hr">
                        <ul class="mt-4">
                            <li>
                                <i class="fa-solid fa-location-dot"></i>
                                <span>Address Information</span>
                                <p class="footer-pragraph-color">
                                    level13, 2Elizabeth St, Melbourne, Victor 2000
                                </p>
                            </li>
                            <li>
                                <p class="mb-0"><span><i class="fa-solid fa-phone-volume"></i></span>
                                    Call Now
                                </p>
                                <a href="tel:+01 1234567890" class="footer-pragraph-color">

                                    +01 1234567890</a>

                            </li>
                            <li>

                                <p class="mb-0"><span><i class="fa-regular fa-envelope"></i></i></span>
                                    Mail
                                </p>
                                <a href="mailto: mail@domain.com" class="footer-pragraph-color">


                                    mail@domain.com</a>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="explore">
                        <h2>EXPLORE OUR SITE</h2>
                        <hr class="footer-hr">
                        <ul class="">
                            <li><a href="">Home</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Contact Us</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-fluid copyright text-center text-white p-3">
        <ul class="nav footer-social-links justify-content-center just-center">
            <li>
                <a href="#" target="_blank"><i class="fa-brands fa-google"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fab fa-pinterest-square"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
            </li>
            <li>
                <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
            </li>
        </ul>
        <p class="mb-0">Copyright © Fables 2018. All rights reserved.</p>
    </div>
</body>

</html>